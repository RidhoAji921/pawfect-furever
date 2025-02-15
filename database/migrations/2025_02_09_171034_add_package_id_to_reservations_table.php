<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Tambahkan kolom package_id
            $table->unsignedBigInteger('package_id')->after('address'); 
            // Tambahkan foreign key
            $table->foreign('package_id')->references('id')->on('packages'); 
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['package_id']); // Hapus foreign key
            $table->dropColumn('package_id'); // Hapus kolom package_id
        });
    }

};
