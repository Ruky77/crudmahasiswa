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
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nim')->unique();
        $table->string('nama_lengkap');
        $table->string('jurusan');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->string('nomer_telepon');
        $table->string('email')->unique();
        $table->text('alamat_tinggal');
        $table->string('foto')->nullable();
        $table->timestamps();
    });
}

};
