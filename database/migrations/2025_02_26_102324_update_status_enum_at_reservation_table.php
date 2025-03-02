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
        DB::statement("ALTER TABLE reservations MODIFY COLUMN status ENUM('Pending','Finished','Waiting','Driver Ongoing!','Grooming','Canceled','Refunded') NOT NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE orders MODIFY COLUMN status ENUM('Pending','Succeed','Driver Ongoing!','Grooming') NOT NULL");
    }
};
