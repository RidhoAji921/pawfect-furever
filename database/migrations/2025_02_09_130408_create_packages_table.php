<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedInteger("price");
            $table->timestamps();
        });

        DB::table('packages')->insert([
            [
                'name' => 'Mandi Biasa',
                'price' => 150000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mandi Lengkap',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
