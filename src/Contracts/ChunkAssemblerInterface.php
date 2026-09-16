<?php

declare(strict_types=1);

namespace SmitBackend\ChunkFlow\Contracts;

/**
 * Interface ChunkAssemblerInterface
 *
 * @package SmitBackend\ChunkFlow
 */
interface ChunkAssemblerInterface
{
    public function execute(array $payload = []): mixed;
}
