<?php

return [
    /**
     * 萤石云APP KEY
     */
    'app_key' => env('YS7_APP_KEY', null),

    /**
     * 萤石云APP SECRET
     */
    'app_secret' => env('YS7_APP_SECRET', null),

    /**
     * 萤石云视频回放地址
     */
    'video_back_url' => env('YS7_VIDEO_BACK_URL', 'https://example.com/'),

    /**
     * 萤石云监控视频路径前缀
     */
    'capture_picture_url_prefix' => env('YS7_CAPTURE_PICTURE_URL_PREFIX', 'capture_picture_url_'),

    /**
     * 萤石云Access Token缓存前缀
     */
    'access_token_cache_prefix' => env('YS7_ACCESS_TOKEN_CACHE_PREFIX', 'ys7_'),

    /**
     * 萤石云Access Token有限时间
     */
    'access_token_valid_days' => env('YS7_ACCESS_TOKEN_VALID_DAYS', 7),
];
