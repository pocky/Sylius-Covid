<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Entity;

use Sylius\Component\Core\Model\ChannelInterface;

class Support implements SupportInterface
{
    private $id;

    private $channel;

    private $phoneNumber;

    public function getId()
    {
        return $this->id;
    }

    public function setChannel(ChannelInterface $channel)
    {
        $this->channel = $channel;
    }

    public function getChannel(): ?ChannelInterface
    {
        return $this->channel;
    }

    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
}
