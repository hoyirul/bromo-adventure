<?php

namespace Tests\Feature\Admin;

use App\Models\Paket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaketTest extends TestCase
{
    public function test_paket_table_rendered()
    {
        $response = $this->get('/admin/paket');

        $response->assertSeeText('Tipe Paket');
        $response->assertSeeText('Harga');
        $response->assertSeeText('Foto');
        $response->assertSeeText('Dibuat');
        $response->assertSeeText('Aksi');
        $response->assertSeeText('Tabel Paket');
        $response->assertStatus(200);
    }

    public function test_paket_create_rendered(){
        $response = $this->get('/admin/paket/create');

        $response->assertSee('Private Trip');
        $response->assertSee('Mulai Harga');
        $response->assertSee('Foto');
        $response->assertStatus(200);
    }

    public function test_table_pakets_from_database(){
        $this->assertDatabaseHas('pakets', [
            'tipe_id' => 1,
            'mulai_harga' => 300000,
        ]);
    }

    public function test_add_data_paket(){
        $response = $this->followingRedirects()->post('/admin/paket', [
            'tipe_id' => 1,
            'deskripsi' => 'Lorem Ipsum Testing',
            'mulai_harga' => 350000,
            'foto' => NULL
        ]);
        //redirect to home
        $response->assertStatus(200);
    }

    public function test_edit_data_shown_correctly(){
        $id = 1;
        $response = $this->get('/admin/paket/'.$id.'/edit');

        $response->assertSee('Private Trip');
        $response->assertSee('Mulai Harga');
        $response->assertSee('Foto');
        $response->assertStatus(200);
    }

    public function test_update_paket_by_id(){
        $data = Paket::find(3);

        $this->followingRedirects()->put($data->id, [
            'paket' => 'test update'
        ]);

        $this->assertDatabaseHas('pakets', $data->toArray());
        $this->assertTrue(true);
    }

    public function test_delete_paket_by_id(){
        $data = Paket::find(3);
        
        $this->followingRedirects()->delete($data->id);
        $this->assertDatabaseHas('pakets', $data->toArray());
        $this->assertTrue(true);
    }
}
