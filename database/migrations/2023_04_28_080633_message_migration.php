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
        Schema::create('messagesbotman', function (Blueprint $table) {
            $table->id();
            
            $table->string('message');
            $table->string('reply');
            $table->string('reply2');
            $table->string('reply3');
            $table->string('reply4');
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
