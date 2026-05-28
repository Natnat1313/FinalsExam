<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('employeetb', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('address');
            $table->date('dob');
            $table->string('contactno');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
