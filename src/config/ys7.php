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
    'capture_picture_url_prefix' => env('YS7_CAPTURE_PICTURE_URL_PREFIX', 'capture_picture_url_')
];
