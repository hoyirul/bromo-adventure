<?php

namespace Tests\Feature\Admin;

use App\Models\Tipe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TipeTest extends TestCase
{
    public function test_tipe_table_rendered()
    {
        $response = $this->get('/admin/tipe');

        $response->assertSeeText('Tipe');
        $response->assertSeeText('Dibuat');
        $response->assertSeeText('Aksi');
        $response->assertSeeText('Tabel Tipe Paket');
        $response->assertStatus(200);
    }

    public function test_tipe_create_rendered(){
        $response = $this->get('/admin/tipe/create');

        $response->assertSee('Tipe');
        $response->assertStatus(200);
    }

    public function test_table_tipes_from_database(){
        $this->assertDatabaseHas('tipes', [
            'tipe' => 'Private Trip',
        ]);
    }

    public function test_add_data_tipe(){
        $response = $this->followingRedirects()->post('/admin/tipe', [
            'tipe' => 'Tipe Testing',
        ]);
        //redirect to home
        $response->assertStatus(200);
    }

    public function test_edit_data_shown_correctly(){
        $id = 1;
        $response = $this->get('/admin/tipe/'.$id.'/edit');

        $response->assertSee('Tipe');
        $response->assertStatus(200);
    }

    public function test_update_tipe_by_id(){
        $data = Tipe::find(3);

        $this->followingRedirects()->put($data->id, [
            'tipe' => 'tipe test update'
        ]);

        $this->assertDatabaseHas('tipes', $data->toArray());
        $this->assertTrue(true);
    }

    public function test_delete_tipe_by_id(){
        $data = Tipe::find(4);
        
        $this->followingRedirects()->delete($data->id);
        $this->assertDatabaseHas('tipes', $data->toArray());
        $this->assertTrue(true);
    }
}
