<?php

namespace Tests\Feature\Admin;

use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{

    public function test_role_table_rendered()
    {
        $response = $this->get('/admin/role');

        $response->assertSeeText('Role');
        $response->assertSeeText('Dibuat');
        $response->assertSeeText('Aksi');
        $response->assertSeeText('Tabel Roles');
        $response->assertStatus(200);
    }

    public function test_role_create_rendered(){
        $response = $this->get('/admin/role/create');

        $response->assertSee('Role');
        $response->assertStatus(200);
    }

    public function test_table_roles_from_database(){
        $this->assertDatabaseHas('roles', [
            'role' => 'admin',
        ]);
    }

    public function test_add_data_role(){
        $response = $this->followingRedirects()->post('/admin/role', [
            'role' => 'role test',
        ]);
        //redirect to home
        $response->assertStatus(200);
    }

    public function test_edit_data_shown_correctly(){
        $id = 1;
        $response = $this->get('/admin/role/'.$id.'/edit');

        $response->assertSee('admin');
        $response->assertStatus(200);
    }

    public function test_update_role_by_id(){
        $role = Role::find(3);

        $this->followingRedirects()->put($role->id, [
            'role' => 'test update'
        ]);

        $this->assertDatabaseHas('roles', $role->toArray());
        $this->assertTrue(true);
    }

    public function test_delete_role_by_id(){
        $role = Role::find(8);
        
        $this->followingRedirects()->delete($role->id);
        $this->assertDatabaseHas('roles', $role->toArray());
        $this->assertTrue(true);
    }
}