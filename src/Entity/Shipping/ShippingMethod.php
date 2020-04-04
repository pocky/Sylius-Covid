<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use CoopTilleuls\SyliusClickNCollectPlugin\Entity\ClickNCollectShippingMethod;
use CoopTilleuls\SyliusClickNCollectPlugin\Entity\ClickNCollectShippingMethodInterface;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Shipping\Model\ShippingMethodTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_shipping_method")
 */
class ShippingMethod extends BaseShippingMethod implements ClickNCollectShippingMethodInterface
{
    use ClickNCollectShippingMethod {
        __construct as initializeShippingMethodLocations;
    }

    public function __construct()
    {
        parent::__construct();

        $this->initializeShippingMethodLocations();
    }

    protected function createTranslation(): ShippingMethodTranslationInterface
    {
        return new ShippingMethodTranslation();
    }
}
