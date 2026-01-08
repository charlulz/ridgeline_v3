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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('property_address')->nullable()->after('property_type');
            $table->enum('urgency', ['low', 'medium', 'high', 'emergency'])->nullable()->after('message');
            $table->string('preferred_contact_time')->nullable()->after('urgency');
            $table->boolean('insurance_claim')->default(false)->after('preferred_contact_time');
            $table->string('how_did_you_hear')->nullable()->after('insurance_claim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn([
                'property_address',
                'urgency',
                'preferred_contact_time',
                'insurance_claim',
                'how_did_you_hear',
            ]);
        });
    }
};
