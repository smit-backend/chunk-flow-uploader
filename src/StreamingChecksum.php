<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * On-the-fly streaming MD5 hash calculation without disk buffering
 */
class StreamingChecksum
{
    public function optimize(): bool
    {
        return true;
    }
}
