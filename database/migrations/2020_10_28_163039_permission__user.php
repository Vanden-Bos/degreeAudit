<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionUser extends Migration
{
    public function up()
    {
        Schema::create('permissions_users', function (Blueprint $table) {
            $table->bigInteger('permission_id');
            $table->bigInteger('user_id');
        });
    }
}
