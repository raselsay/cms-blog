<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });
        
        Schema::create('ability_role', function (Blueprint $table) {
            $table->primary(['ability_id', 'role_id']);
            
            $table->foreignId('ability_id')
                    ->constrained('abilities')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('role_id')
                    ->constrained('roles')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->timestamps();
            
        });

        Schema::create('role_user', function (Blueprint $table) {

            $table->primary(['user_id', 'role_id']);
            
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
            $table->foreignId('role_id')
                    ->constrained('roles')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
