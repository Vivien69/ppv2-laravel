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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marchand_id')->constrained()->onDelete('cascade');
            $table->unsignedDecimal('f_remise')->nullable();
            $table->char('f_devise')->nullable();
            $table->unsignedDecimal('f_mini')->nullable();
            $table->string('f_content');
            $table->unsignedDecimal('p_remise')->nullable();
            $table->char('p_devise')->nullable();
            $table->unsignedDecimal('p_mini')->nullable();
            $table->string('p_content');
            $table->string('url')->nullable();
            $table->unsignedTinyInteger('default')->nullable();
            $table->unsignedTinyInteger('boosted')->nullable();
            $table->unsignedTinyInteger('etat')->default(0);
            $table->timestamp('start_at');
            $table->timestamp('finished_at')->nullable();
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
        Schema::dropIfExists('offres');
    }
};
