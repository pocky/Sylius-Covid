<?php

declare(strict_types=1);

namespace App\Entity\Channel;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Channel as BaseChannel;
use Vanoix\SyliusCustomerSupportPlugin\Entity\CustomerSupportChannel;
use Vanoix\SyliusCustomerSupportPlugin\Entity\CustomerSupportChannelInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_channel")
 */
class Channel extends BaseChannel implements CustomerSupportChannelInterface
{
    use CustomerSupportChannel;
}
