<?php

return [
    'enabled' => env('CHUNK_FLOW_UPLOADER_ENABLED', true),
    'timeout' => env('CHUNK_FLOW_UPLOADER_TIMEOUT', 30),
    'log_channel' => env('CHUNK_FLOW_UPLOADER_LOG', 'stack'),
];
