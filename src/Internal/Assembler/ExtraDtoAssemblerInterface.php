<?php

declare(strict_types=1);

namespace Bavix\Wallet\Internal\Assembler;

use Bavix\Wallet\Internal\Dto\ExtraDtoInterface;

interface ExtraDtoAssemblerInterface
{
    public function create(array|ExtraDtoInterface|null $data): ExtraDtoInterface;
}