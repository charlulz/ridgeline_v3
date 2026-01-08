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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->enum('property_type', ['residential', 'commercial', 'multi_unit', 'not_sure'])->nullable();
            $table->text('message')->nullable();
            $table->string('source')->default('website'); // website, phone, referral, etc.
            $table->string('utm_source')->nullable();
            $table->string('utm_medium')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->enum('status', ['new', 'contacted', 'qualified', 'scheduled', 'proposal_sent', 'closed_won', 'closed_lost'])->default('new');
            $table->integer('lead_score')->default(0);
            $table->timestamp('last_contacted_at')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
