<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            //int role id unsigned for foreign key
            $table->integer('user_id')->unsigned();

            // $table->foreign('role_id')->references('id')->in('roles')->onDelete('cascade');
            // // By deleting the role the hole role will be deleted
            // $table->foreign('user_id')->references('id')->in('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
