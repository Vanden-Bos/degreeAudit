<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleUser extends Migration
{
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {
            $table->bigInteger('role_id');
            $table->bigInteger('user_id');
        });
    }
}
