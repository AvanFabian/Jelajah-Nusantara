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
        Schema::table('users', function (Blueprint $table) {
            // $table->string('profile_photo_path')->default('noImage')->after('email');
            // default is storage/app/public/profile/default.png
            $table->string('profile_photo_path')->default('public/img/profile/defaultUser2.png')->after('email');

        });
    }
// Re-migrate this migration file to add new column to users table
// php artisan migrate:refresh --path=database/migrations/2023_05_18_231045_add_profile_photo_path_to_users.php
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_photo_path');
        });
    }
};
