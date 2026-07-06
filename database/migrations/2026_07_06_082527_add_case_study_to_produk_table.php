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
        Schema::table('produk', function (Blueprint $table) {
            $table->text('masalah')->nullable();
            $table->text('solusi')->nullable();
            $table->text('teknologi')->nullable();
            $table->text('hasil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropColumn(['masalah', 'solusi', 'teknologi', 'hasil']);
        });
    }
};
