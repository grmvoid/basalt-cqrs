<?php

declare(strict_types=1);

/*
 * This file is part of the grmvoid/basalt-cqrs.
 *
 * Copyright (C) Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Basalt\CQRS\Command;

interface CommandHandler
{
    public function handle(Command $command): void;
}
