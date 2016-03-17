<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imageUrl');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('modality_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('modality_id')->unsigned();
            $table->string('name');
            $table->text('summary');
            $table->string('locale')->index();

            $table->unique(['modality_id','locale']);
            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modality_translations');
        Schema::drop('modalities');
    }
}
