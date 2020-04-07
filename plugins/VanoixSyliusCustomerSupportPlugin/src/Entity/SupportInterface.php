<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Entity;

use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface SupportInterface extends ResourceInterface
{
    public function getId();

    public function getChannel(): ?ChannelInterface;

    public function getPhoneNumber(): ?string;
}
