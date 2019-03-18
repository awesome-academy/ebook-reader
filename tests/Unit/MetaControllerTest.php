<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Meta;


class MetaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_method()
    {
        $metas = factory(Meta::class, 5)->create();

        $this->get(route('categories'))
            ->assertViewIs('backend.categories')
            ->assertStatus(200);
    }

    public function test_store_method()
    {
        $name = 'new cate';
        $data = [
            'name' => $name,
            'slug' => str_slug($name),
            'type' => 'categories',
        ]; 

        $this->post(route('update_cate'), $data)
            ->assertStatus(302);
    }

    public function test_update_method()
    {
        $meta = factory(Meta::class)->create();        
        
        $name = 'update cate';
        $data = [
            'name' => $name,
            'slug' => str_slug($name),
            'type' => 'categories',
        ];

        $this->post(route('update_cate', $meta->id), $data)
            ->assertStatus(302);
    }

    public function test_delete_method()
    {
        $meta = factory(Meta::class)->create();

        $this->get(route('delete_cate', $meta->id))
            ->assertStatus(302);
    }
}
