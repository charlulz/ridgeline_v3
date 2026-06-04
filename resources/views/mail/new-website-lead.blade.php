A new lead was submitted on the Ridgeline Roofing website and synced to JobProgress.

Name: {{ $lead->name }}
Phone: {{ $lead->phone }}
Email: {{ $lead->email ?: 'Not provided' }}
Property type: {{ $lead->property_type ?: 'Not provided' }}
Address: {{ $lead->property_address ?: 'Not provided' }}

@if ($lead->message)
Message:
{{ $lead->message }}
@endif

Source: {{ $lead->source }}
@if ($lead->utm_source || $lead->utm_medium || $lead->utm_campaign)
UTM: {{ collect([$lead->utm_source, $lead->utm_medium, $lead->utm_campaign])->filter()->implode(' | ') }}
@endif

Lead score: {{ $lead->lead_score }}
@if ($jobProgressCustomerId)
JobProgress customer ID: {{ $jobProgressCustomerId }}
@endif

Assigned to: {{ config('jobprogress.assignee_email') }}
