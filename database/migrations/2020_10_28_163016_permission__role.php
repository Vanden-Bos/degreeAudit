<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionRole extends Migration
{
    public function up()
    {
        Schema::create('permissions_roles', function (Blueprint $table) {
            $table->bigInteger('permission_id');
            $table->bigInteger('role_id');
        });
    }
}
