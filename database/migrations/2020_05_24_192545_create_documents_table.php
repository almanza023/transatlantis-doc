<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {           

            $table->bigIncrements('id_document');
           
            $table->string('name');
            $table->string('version')->nullable();
            $table->date('date');
            $table->foreignId('id_type_document')
                ->references('id_type_document')
                ->on('type_documents')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
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
        Schema::dropIfExists('documents');
    }
}
