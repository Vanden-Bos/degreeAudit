<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Permission extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPermission()
    {
        $permission = \App\Models\Permission::create(['user_id' => '123456', 'permission' => 's/he can do the thing']);
        $this->assertDatabaseHas('permissions',       ['user_id' => '123456', 'permission' => 's/he can do the thing']);
    }

    public function testPermissionRolePivot()
    {
        $permission = Permission::find($permission_id);
        $permission->roles()->attach($role_id);
    }

    public function testPermissionUserPivot()
    {
        $permission = Permission::find($permission_id);
        $permission->users()->attach($user_id);
    }
}
