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
        Schema::create('tbl_strands', function (Blueprint $table) {
            $table->id('strand_id');

            $table->bigInteger('s_track_id')->unsigned()->index()->nullable();
            $table->foreign('s_track_id')->references('track_id')->on('tbl_tracks')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_strands');
    }
};
