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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDeletE('cascade');
            $table->integer('employee_number')->nullable();
            $table->unsignedBigInteger('employee_category_id');
            $table->foreign('employee_category_id')->references('id')->on('employee_categories')->onDeletE('cascade');
            $table->unsignedBigInteger('blood_type_id');
            $table->foreign('blood_type_id')->references('id')->on('blood_types')->onDeletE('cascade');
            $table->string('allergies')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('signature')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
