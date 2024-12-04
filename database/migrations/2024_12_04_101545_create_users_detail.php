<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_detail', function (Blueprint $table) {
            $table->id();
            $table->enum('gender', ['L', 'P']);
            $table->date('birth');
            $table->enum('bidang', ['kesehatan', 'pendidikan', 'lingkungan']);
            $table->string('profesi');
            $table->string('institusi');
            $table->enum('provinsi', ['jawa timur', 'jawa barat']);
            $table->enum('kota', ['kabupaten bekasi', 'kota bekasi', 'kota malang', 'kota surabaya']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('users_detail', function (Blueprint $table) {  
            $table->dropColumn('gender');  
        });  
        Schema::dropIfExists('user_detail');
    }
};
