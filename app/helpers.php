<?php

if (! function_exists('company_cam')) {
    /**
     * Resolve a CompanyCam photo assignment for a page slot.
     *
     * @return array{url: string, alt: string, file: string|null}
     */
    function company_cam(string $pageKey, ?string $fallback = null): array
    {
        $photos = config('company_cam.photos', []);
        $pages = config('company_cam.pages', []);

        $file = $pages[$pageKey] ?? $fallback;

        if ($file === null || ! isset($photos[$file])) {
            return [
                'url' => '',
                'alt' => '',
                'file' => null,
            ];
        }

        $directory = trim(config('company_cam.directory', 'img/company-cam'), '/');

        return [
            'url' => asset($directory.'/'.$file),
            'alt' => $photos[$file]['alt'],
            'file' => $file,
        ];
    }
}

if (! function_exists('company_cam_url')) {
    function company_cam_url(string $pageKey, ?string $fallback = null): string
    {
        return company_cam($pageKey, $fallback)['url'];
    }
}

if (! function_exists('company_cam_alt')) {
    function company_cam_alt(string $pageKey, ?string $fallback = null): string
    {
        return company_cam($pageKey, $fallback)['alt'];
    }
}
