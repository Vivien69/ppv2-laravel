<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchands', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('categorie_id')->constrained();
            $table->unsignedTinyInteger('user_id')->constrained()->nullable();
            $table->string('name')->unique();
            $table->string('url');
            $table->string('slug')->unique();
            $table->string('url_conditions')->nullable();
            $table->string('picture');
            $table->string('offers');
            $table->text('content');
            $table->mediumText('foncparrainage');
            $table->unsignedTinyInteger('etat')->default(1);
            $table->boolean('actif')->default(0);
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
        Schema::dropIfExists('marchands');
    }
};
