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
        DB::table('pet_hotel_reservations')->truncate();
        Schema::table('pet_hotel_reservations', function (Blueprint $table) {
            $table->string("reservation_identifier")->unique()->after("id");
            $table->enum('status', ['Pending','Paid','Finished','Waiting','Driver Ongoing','Staying','Staying Late', 'Late Check-Out','Canceled','Refunded'])->default('Pending')->after('total_price');
            $table->text('user_note')->nullable()->after('status');
            $table->text('annotation')->nullable()->after('user_note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pet_hotel_reservations', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('reservation_identifier');
            $table->dropColumn('user_note');
            $table->dropColumn('annotation');
        });
    }
};
