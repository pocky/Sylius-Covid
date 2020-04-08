<?php

declare(strict_types=1);

namespace Vanoix\SyliusMailerPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class VanoixSyliusMailerPlugin extends Bundle
{
    use SyliusPluginTrait;
}
