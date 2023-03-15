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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marchand_id')->constrained()->onUpdate('restrict')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('restrict')->onDelete('cascade'); 
            $table->unsignedTinyInteger('type');
            $table->string('code')->nullable();
            $table->string('lien')->nullable();
            $table->mediumText('content');
            $table->decimal('bonus');
            $table->unsignedTinyInteger('etat');
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
        Schema::dropIfExists('annonces');
    }
};
