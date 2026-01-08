<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GoHighLevel API Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for GoHighLevel API integration. You can find your API
    | key and location ID in your GoHighLevel account settings.
    |
    */

    'api_key' => env('GHL_API_KEY'),
    'location_id' => env('GHL_LOCATION_ID'),
    'pipeline_id' => env('GHL_PIPELINE_ID'),
    'base_url' => env('GHL_BASE_URL', 'https://services.leadconnectorhq.com'),

    /*
    |--------------------------------------------------------------------------
    | Default Tags
    |--------------------------------------------------------------------------
    |
    | Default tags to apply to contacts based on various criteria.
    |
    */

    'default_tags' => [
        'website_lead' => 'Website Lead',
        'high_priority' => 'High Priority',
        'residential' => 'Residential',
        'commercial' => 'Commercial',
        'emergency' => 'Emergency',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Fields Mapping
    |--------------------------------------------------------------------------
    |
    | Map Laravel Lead model fields to GoHighLevel custom fields.
    | You'll need to create these custom fields in your GHL account first.
    |
    */

    'custom_fields' => [
        'property_type' => 'property_type',
        'lead_score' => 'lead_score',
        'source' => 'source',
        'utm_source' => 'utm_source',
        'utm_medium' => 'utm_medium',
        'utm_campaign' => 'utm_campaign',
    ],

    /*
    |--------------------------------------------------------------------------
    | Funnel Stages Mapping
    |--------------------------------------------------------------------------
    |
    | Map lead statuses to GoHighLevel pipeline stages.
    |
    */

    'pipeline_stages' => [
        'new' => env('GHL_STAGE_NEW', 'New Lead'),
        'contacted' => env('GHL_STAGE_CONTACTED', 'Contacted'),
        'qualified' => env('GHL_STAGE_QUALIFIED', 'Qualified'),
        'scheduled' => env('GHL_STAGE_SCHEDULED', 'Scheduled'),
        'proposal_sent' => env('GHL_STAGE_PROPOSAL', 'Proposal Sent'),
        'closed_won' => env('GHL_STAGE_CLOSED_WON', 'Closed Won'),
        'closed_lost' => env('GHL_STAGE_CLOSED_LOST', 'Closed Lost'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Webhook Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for GoHighLevel webhooks.
    |
    */

    'webhook_secret' => env('GHL_WEBHOOK_SECRET'),
    'webhook_enabled' => env('GHL_WEBHOOK_ENABLED', false),
];

