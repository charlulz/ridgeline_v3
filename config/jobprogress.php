<?php

return [
    'base_url' => env('JOB_PROGRESS_BASE_URL', 'https://api.jobprogress.com/api/v3'),
    'access_token' => env('JOB_PROGRESS_ACCESS_TOKEN'),
    'enabled' => env('JOB_PROGRESS_ENABLED', true),
    'phone_label' => env('JOB_PROGRESS_PHONE_LABEL', 'cell'),
];

