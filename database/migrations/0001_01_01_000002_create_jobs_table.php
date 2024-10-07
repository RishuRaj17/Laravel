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
        // Schema::create('student', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name',20);
        //     $table->timestamps();
        // });

        Schema::Create("cars",function(Blueprint $table){
            $table->integer('number')->after('model');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
