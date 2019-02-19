<?php
namespace App\Repositories\Eloquents;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function findOrFail($id)
    {
        return User::findOrFail($id);
    }

    public function update($id, UserUpdateRequest $request)
    {
        $user = User::findOrFail($id);
        $user->full_name = $request->get('name');
        $user->login_name = $request->get('loginname');
        $user->email = $request->get('email');
        $password = $request->get('password');
        if ($password != '') {
            $user->password = Hash::make($password);
        }
        $user->role = ($request->get('role') != 'admin') ? 0 : 1;
        $user->is_banned = ($request->get('ban') != 'no') ? 1 : 0;

        $userProfile = UserProfile::find($id);
        if ($userProfile != null) {
            $userProfile->address = $request->get('address');
            $userProfile->about = $request->get('about'); 
        } else {
            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
            $userProfile->address = $request->get('address');
            $userProfile->about = $request->get('about');
        }
            
        DB::transaction(function() use ($user, $userProfile){
            $user->save();
            $user->profile()->save($userProfile);
        });
    }

    public function store(UserFormRequest $request)
    {
        $user= new User;
        $user->create([
            'full_name' => $request->get('name'),
            'login_name' => $request->get('loginname'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'role' => ($request->get('role') != 'admin') ? 0 : 1,
        ]);
    }
}
