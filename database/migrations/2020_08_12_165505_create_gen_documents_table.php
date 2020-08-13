<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gen_documents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_document')
            ->references('id_document')
            ->on('documents')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->foreignId('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
        
            $table->foreignId('id_status_document')
            ->references('id_status_document')
            ->on('status_documents')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->foreignId('id_type_obtainment')
            ->references('id_type_obtainment')
            ->on('type_obtainments')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->foreignId('id_destination')
            ->references('id_destination')
            ->on('destinations')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->string('name');
            $table->string('extension');
            $table->string('numdoc');
            $table->string('num_folios');            
            $table->string('num_image');
            $table->string('descripcion');
            $table->string('reference');
            $table->date('date');
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
        Schema::dropIfExists('gen_documents');
    }
}
