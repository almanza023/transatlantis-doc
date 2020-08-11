<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id_destination');        

            $table->foreignId('id_type_customer')
                ->references('id_type_customer')
                ->on('type_customers')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
            
            $table->foreignId('id_municipality')
                ->references('id_municipality')
                ->on('municipalities')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreignId('id_title')
                ->references('id_title')
                ->on('titles')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
            
            $table->string('nid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('description');
            $table->integer('status')->default('1');

            

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
        Schema::dropIfExists('destinations');
    }
}
