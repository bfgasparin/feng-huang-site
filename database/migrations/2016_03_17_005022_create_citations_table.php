<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citations', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('first');
            $table->string('imageUrl');
            $table->timestamps();
        });

        Schema::create('citation_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('citation_id')->unsigned();
            $table->text('content');
            $table->string('locale')->index();

            $table->unique(['citation_id','locale']);
            $table->foreign('citation_id')->references('id')->on('modalities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('citations');
        Schema::drop('citation_translations');
    }
}
