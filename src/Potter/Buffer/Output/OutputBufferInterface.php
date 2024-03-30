<?php

declare(strict_types=1);

namespace Potter\Buffer\Output;

use \Potter\Buffer\BufferInterface;

interface OutputBufferInterface extends BufferInterface
{
    public function start(): void;
}