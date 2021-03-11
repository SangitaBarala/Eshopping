<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regusers', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Email');
            $table->string('Password');
            $table->string('Phone');
            $table->string('Address');
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
        Schema::dropIfExists('regusers');
    }
}
