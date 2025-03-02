<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Hapus kolom yang tidak diperlukan
            $table->dropColumn(['phone', 'address', 'name']);

            // Tambahkan kolom user_id sebagai foreign key ke tabel users
            $table->unsignedBigInteger('user_id')->after('id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Tambahkan kolom note
            $table->text('note')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Kembalikan kolom yang dihapus
            $table->string('name')->after('id');
            $table->string('phone')->after('name');
            $table->text('address')->after('phone');

            // Hapus foreign key dan kolom user_id jika rollback
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            // Hapus kolom note jika rollback
            $table->dropColumn('note');
        });
    }
};