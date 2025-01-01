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
        Schema::create('activity', function (Blueprint $table) {  
            $table->id();  
            $table->string('img_activity'); // Kolom untuk gambar aktivitas  
            $table->string('title'); // Kolom untuk judul 
            $table->text('description'); // Kolom untuk deskripsi
            $table->date('period'); // Kolom tanggal periode  
            $table->time('schedule'); // Kolom untuk jadwal  
            $table->string('location'); // Kolom untuk lokasi
            $table->text('detail_activity'); // Kolom tambahan untuk detail  
            $table->timestamps();  
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
