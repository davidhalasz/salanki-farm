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
        Schema::create('openings', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->time('start');
            $table->time('end');
            $table->boolean('closed');
            $table->timestamps();
        });

        DB::table('openings')->insert([
            ['day' => 'Hétfő', 'start' => '00:00', 'end' => '23:59', 'closed' => true],
            ['day' => 'Kedd', 'start' => '00:00', 'end' => '23:59', 'closed' => true],
            ['day' => 'Szerda', 'start' => '00:00', 'end' => '23:59', 'closed' => true],
            ['day' => 'Csütörtök', 'start' => '00:00', 'end' => '23:59', 'closed' => true],
            ['day' => 'Péntek', 'start' => '10:00', 'end' => '18:00', 'closed' => false],
            ['day' => 'Szombat', 'start' => '10:00', 'end' => '18:00', 'closed' => false],
            ['day' => 'Vasárnap', 'start' => '10:00', 'end' => '18:00', 'closed' => false],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('openings');
    }
};
