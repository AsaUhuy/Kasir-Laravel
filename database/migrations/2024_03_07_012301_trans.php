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
        Schema::create('trans', function (Blueprint $table){
            $table -> id();
            $table -> integer('idUser');
            $table -> string('namaKasir') -> nullable();
            $table -> integer('totalHarga');
            $table -> enum('status', ['selesai','pending']) -> default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans');
    }
};
