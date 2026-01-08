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
        Schema::create('email_sequences', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Welcome Sequence", "Follow-up Sequence"
            $table->string('trigger_event'); // lead_created, lead_not_contacted, quote_sent, etc.
            $table->boolean('active')->default(true);
            $table->integer('delay_days')->default(0); // Days after trigger before sending
            $table->timestamps();
        });

        Schema::create('email_sequence_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_sequence_id')->constrained()->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->string('subject');
            $table->longText('content');
            $table->integer('delay_days')->default(0); // Days after previous email
            $table->timestamps();
        });

        Schema::create('lead_email_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->constrained()->onDelete('cascade');
            $table->foreignId('email_sequence_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('email_sequence_email_id')->nullable()->constrained()->onDelete('set null');
            $table->string('subject');
            $table->text('status')->default('pending'); // pending, sent, failed, opened, clicked
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('opened_at')->nullable();
            $table->timestamp('clicked_at')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_email_logs');
        Schema::dropIfExists('email_sequence_emails');
        Schema::dropIfExists('email_sequences');
    }
};
