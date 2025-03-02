<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->string("code")->after("price");
        });
        
        DB::table('packages')
            ->where('name', 'Mandi Biasa')
            ->update(['code' => 'MBS']);
        DB::table('packages')
            ->where('name', 'Mandi Lengkap')
            ->update(['code' => 'MLK']);
            
        Schema::table('packages', function (Blueprint $table) {
            $table->string("code")->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('code');
        });
    }
};
