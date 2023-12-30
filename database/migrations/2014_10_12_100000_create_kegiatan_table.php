<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')
      ->constrained()
      ->onUpdate('cascade')
      ->restrictOnDelete();
            $table->timestamp('tanggal')->useCurrent();
            $table->string('fotokegiatan', 225);
            $table->longText('deskripsi');
            $table->string('judul', 225);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
};