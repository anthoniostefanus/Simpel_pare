<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasi1Tabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi1', function (Blueprint $table) {
            $table-> varchar ('Username')->unique();
            $table-> string  ('email')->unique();
            $table-> varchar ('No.Telepon');
            $table-> varchar ('Kata Sandi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi1');
    }
}
