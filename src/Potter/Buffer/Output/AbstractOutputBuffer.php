<?php

declare(strict_types=1);

namespace Potter\Buffer\Output;

use \Potter\Buffer\AbstractBuffer;

abstract class AbstractOutputBuffer extends AbstractBuffer implements OutputBufferInterface
{
    abstract public function start(): void;
}