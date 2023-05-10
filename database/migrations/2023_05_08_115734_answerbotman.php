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
        //
        Schema::create('answersbotman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('message_id');
            $table->integer('order');
            $table->string('message');
            
            $table->foreign('message_id')->references('id')->on('messagesbotman');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
