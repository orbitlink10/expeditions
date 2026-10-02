<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->text('value');
            $table->timestamps();
        });
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('email', 160);
            $table->string('telephone', 60);
            $table->string('contact_preference');
            $table->unsignedTinyInteger('adults');
            $table->unsignedTinyInteger('children')->default(0);
            $table->json('child_ages');
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('new')->index();
            $table->string('notification_status')->default('pending');
            $table->string('notification_email')->nullable();
            $table->timestamp('notified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
        Schema::dropIfExists('site_settings');
    }
};
