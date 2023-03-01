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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('id_agama');
            $table->string('id_jabatan');
            $table->string('id_jk');
            $table->string('id_status');
            $table->string('id_kelas');
            $table->string('id_mp');
            $table->string('email');
            $table->string('alamat');
            $table->string('notelepon');
            $table->date('tgl_masuk');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        // Schema::table('gurus', function (Blueprint $table) {
        //     $table->foreign('id_kelas')->references('id')->on('kelas')
        //         ->onDelete('cascade')->onUpdate('cascade');
        // });
        // Schema::table('gurus', function (Blueprint $table) {
        //     $table->foreign('id_mp')->references('id')->on('matapelajarans')
        //         ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
