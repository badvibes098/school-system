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
        Schema::create('tbl_sections', function (Blueprint $table) {
            $table->id('sect_id');

            $table->bigInteger('sect_sy_id')->unsigned()->index()->nullable();
            $table->foreign('sect_sy_id')->references('sy_id')->on('tbl_sy')->onDelete('restrict');

            $table->bigInteger('sect_user_id')->unsigned()->index()->nullable();
            $table->foreign('sect_user_id')->references('id')->on('users')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_sections');
    }
};
