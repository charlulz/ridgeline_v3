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
        Schema::create('funnel_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Storm Damage Emergency", "Spring Roofing Special"
            $table->string('slug')->unique();
            $table->string('campaign_name')->nullable(); // For tracking
            $table->text('headline');
            $table->text('subheadline')->nullable();
            $table->longText('content');
            $table->string('hero_image')->nullable();
            $table->string('form_type')->default('standard'); // standard, emergency, inspection, quote
            $table->json('offer_details')->nullable(); // Special offers, discounts, urgency messaging
            $table->string('thank_you_page')->default('thank-you'); // Which thank you page to redirect to
            $table->boolean('active')->default(true);
            $table->boolean('track_conversions')->default(true);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('views')->default(0);
            $table->integer('conversions')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funnel_pages');
    }
};
