<?php
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;

if (! function_exists('get_avatar')) {
    function get_avatar($user, $size = null) {
        $image = config('app.avatar_path') . ($user->avatar ?? config('app.default_avatar'));
        $sizes = config('app.avatar_sizes');
        if (! ($size && in_array($size, $sizes))) {
            $size = current($sizes);
        }
        $image = preg_replace('/\.([a-z]+)/', '_' . $size . '.$1', $image);

        return $image;
    }
}

if (! function_exists('get_user_cover')) {
    function get_user_cover($user, $size = 0) {
        $image = config('app.user_cover_path') . ($user->cover_image ?? config('app.user_default_cover'));
        $sizes = config('app.user_cover_sizes');
        if (! ($size && isset($sizes[$size]))) {
            $size = current($sizes);
        }
        $image = preg_replace('/\.([a-z]+)/', '_' . implode('x', $size) . '.$1', $image);

        return $image;
    }
}

if (! function_exists('get_story_cover')) {
    function get_story_cover($story, $size = 0) {
        $image = config('app.story_cover_path') . ($story->cover_image ?? config('app.story_default_cover'));
        $sizes = config('app.story_cover_sizes');
        if (! ($size && isset($sizes[$size]))) {
            $size = current($sizes);
        } else {
            $size = $sizes[$size];
        }
        $image = preg_replace('/\.([a-z]+)/', '_' . implode('x', $size) . '.$1', $image);

        return $image;
    }
}

if (!function_exists('uploadFile')) {
    function uploadFile($file, $path, $sizes, $extension = null)
    {
        $fileName = microtime(true);
        if ($file instanceOf UploadedFile) {
            $fileExtension = $file->getClientOriginalExtension();
            $filePath = $file->getRealPath();
        } else {
            $fileExtension = 'jpeg';
            $filePath = $file;
        }

        try {
            $image = Image::make($filePath);
            $image->backup();
            $first = true;
            foreach ($sizes as $size) {
                if (is_array($size)) {
                    [$width, $height] = $size;
                    $size = implode('x', $size);
                } else {
                    $width = $height = $size;
                }
                $fileSaveName = $fileName . '_' . $size . '.' . $fileExtension;
                if ($first) {
                    $first = false;
                } else {
                    $image->reset();
                }
                $image->fit($width, $height);
                $image->save($path . $fileSaveName);
            }
            
            return $fileName . '.' . $fileExtension;
        } catch (\Exeption $e) {
            return false;
        }
    }
}
