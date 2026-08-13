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
       Schema::table('plans', function (Blueprint $table) {
            // Drop the existing foreign key and column if it exists
            if (Schema::hasColumn('plans', 'hosting_id')) {
                $table->dropForeign(['hosting_id']);
                $table->dropColumn('hosting_id');
            }

            // Add polymorphic relation fields
            $table->unsignedBigInteger('planable_id')->after('id');
            $table->string('planable_type')->after('planable_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn('planable_id');
            $table->dropColumn('planable_type');

            // Optionally restore the hosting_id field
            $table->foreignId('hosting_id')
                ->nullable()
                ->constrained('hostings')
                ->onDelete('restrict');
        });
    }
};
