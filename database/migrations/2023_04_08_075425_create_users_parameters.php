<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_parameters', function(Blueprint $table) {
            $table->bigInteger('user_id')->constrained();
            $table->tinyInteger('anorder')->nullable();
            $table->tinyInteger('sort')->nullable();
            $table->tinyInteger('fistcotoday')->nullable();
            $table->tinyInteger('online')->nullable();
            $table->tinyInteger('datemask')->nullable();
            $table->tinyInteger('mail_message')->nullable();
            $table->tinyInteger('mail_notif')->nullable();
            $table->tinyInteger('mail_newsletter')->nullable();
            $table->tinyInteger('conf_mail_notif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_parameters');
    }
};
