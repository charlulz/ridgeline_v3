# GoHighLevel Integration Setup

## Environment Variables

Add the following to your `.env` file:

```env
# GoHighLevel API Configuration
GHL_API_KEY=your_api_key_here
GHL_LOCATION_ID=your_location_id_here
GHL_PIPELINE_ID=your_pipeline_id_here
GHL_BASE_URL=https://services.leadconnectorhq.com

# Optional: Pipeline Stage Names (if different from defaults)
GHL_STAGE_NEW=New Lead
GHL_STAGE_CONTACTED=Contacted
GHL_STAGE_QUALIFIED=Qualified
GHL_STAGE_SCHEDULED=Scheduled
GHL_STAGE_PROPOSAL=Proposal Sent
GHL_STAGE_CLOSED_WON=Closed Won
GHL_STAGE_CLOSED_LOST=Closed Lost

# Webhook Configuration (Optional)
GHL_WEBHOOK_SECRET=your_webhook_secret_here
GHL_WEBHOOK_ENABLED=true
```

## Getting Your GoHighLevel Credentials

1. **API Key**: 
   - Go to Settings > Integrations > API
   - Generate a new API key or use an existing one
   - Copy the API key

2. **Location ID**:
   - Go to Settings > Locations
   - Select your location
   - The Location ID is in the URL or settings

3. **Pipeline ID**:
   - Go to Settings > Pipelines
   - Select your pipeline
   - The Pipeline ID is in the URL or settings

## Webhook Setup

To receive webhooks from GoHighLevel:

1. In GoHighLevel, go to Settings > Integrations > Webhooks
2. Add a new webhook with URL: `https://yourdomain.com/webhooks/gohighlevel`
3. Select the events you want to receive:
   - `contact.created`
   - `contact.updated`
   - `contact.stage_changed`
   - `contact.note_added`
4. Set a webhook secret and add it to your `.env` file

## Custom Fields Setup

Create the following custom fields in GoHighLevel (Settings > Custom Fields):

- `property_type` (Text)
- `lead_score` (Number)
- `source` (Text)
- `utm_source` (Text)
- `utm_medium` (Text)
- `utm_campaign` (Text)

## Testing

The integration will automatically:
- Create contacts in GoHighLevel when leads are submitted
- Tag contacts based on property type, priority, and urgency
- Update contact status when lead status changes
- Sync notes and updates between systems

All API calls are logged in Laravel's log file for debugging.

