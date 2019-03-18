<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Meta;

class MetaDatabaseTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMetaCreate()
    {
        $meta = factory(Meta::class)->create();
        
        $this->assertDatabaseHas('metas', [
            'name' => $meta->name,
            'type' => $meta->type,
        ]);
    }

    public function testMetaUpdate()
    {
        $meta = factory(Meta::class)->create();        
        
        $name = 'update cate';
        $data = [
            'name' => $name,
            'slug' => str_slug($name),
            'type' => 'categories',
        ];
        $meta = Meta::findOrFail(1);
        $meta->update($data);

        $this->assertDatabaseHas('metas', [
            'name' => $meta->name,
            'type' => $meta->type,
        ]);
    }

    public function testMetaDelete()
    {
        $meta = factory(Meta::class)->create();
        
        $meta->delete();

        $this->assertDatabaseMissing('metas', [
            'name' => $meta->name,
            'type' => $meta->type,
        ]);
    }
}
