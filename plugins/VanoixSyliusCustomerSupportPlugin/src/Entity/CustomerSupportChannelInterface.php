<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Entity;

interface CustomerSupportChannelInterface
{
    public function getCustomerSupport(): ?SupportInterface;
}
