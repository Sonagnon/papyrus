<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Annotations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annotations', function (Blueprint $table) {

            $table->id();
            $table->text('contenu');
            $table->date('date');
            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')
                  ->references('id')
                  ->on('documents')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
         Schema::table('annotations', function(Blueprint $table) {
            $table->dropForeign('annotations_document_id_foreign');
            $table->dropForeign('annotations_user_id_foreign');
        });
        Schema::drop('annotations');
    }
}
