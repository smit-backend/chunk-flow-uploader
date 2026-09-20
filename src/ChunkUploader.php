<?php

declare(strict_types=1);

namespace SmitBackend\ChunkFlow;

use SmitBackend\ChunkFlow\Contracts\ChunkAssemblerInterface;

/**
 * Class ChunkUploader
 *
 * @package SmitBackend\ChunkFlow
 */
class ChunkUploader implements ChunkAssemblerInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
