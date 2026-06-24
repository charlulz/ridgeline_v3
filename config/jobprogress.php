<?php

return [
    'base_url' => env('JOB_PROGRESS_BASE_URL', 'https://api.jobprogress.com/api/v3'),
    'access_token' => env('JOB_PROGRESS_ACCESS_TOKEN'),
    'enabled' => env('JOB_PROGRESS_ENABLED', true),
    'phone_label' => env('JOB_PROGRESS_PHONE_LABEL', 'cell'),
    'assignee_email' => env('JOB_PROGRESS_ASSIGNEE_EMAIL', 'tyler@ridgelineroofing.us'),
    'assignee_rep_id' => env('JOB_PROGRESS_ASSIGNEE_REP_ID'),
    'notification_emails' => array_values(array_filter(array_map(
        'trim',
        explode(',', (string) env('JOB_PROGRESS_NOTIFICATION_EMAILS', 'tyler@ridgelineroofing.us,info@ridgelineroofing.us,charles@silentpine.co'))
    ))),
];

