<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

trait CustomerSupportChannel
{
    /**
     * @ORM\OneToOne(targetEntity="Vanoix\SyliusCustomerSupportPlugin\Entity\SupportInterface", mappedBy="channel")
     */
    protected $customerSupport;

    public function getCustomerSupport(): ?SupportInterface
    {
        return $this->customerSupport;
    }
}
