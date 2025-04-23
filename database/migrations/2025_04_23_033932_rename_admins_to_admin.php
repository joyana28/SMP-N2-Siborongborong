<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('admins')) {
            Schema::rename('admins', 'admin');
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('admin')) {
            Schema::rename('admin', 'admins');
        }
    }
};
