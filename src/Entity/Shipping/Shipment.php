<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use CoopTilleuls\SyliusClickNCollectPlugin\Entity\ClickNCollectShipment;
use CoopTilleuls\SyliusClickNCollectPlugin\Entity\ClickNCollectShipmentInterface;
use CoopTilleuls\SyliusClickNCollectPlugin\Validator\Constraints\SlotAvailable;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Shipment as BaseShipment;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_shipment", indexes={@ORM\Index(columns={"location_id", "collection_time"})})
 * @SlotAvailable(groups={"sylius"})
 */
class Shipment extends BaseShipment implements ClickNCollectShipmentInterface
{
    use ClickNCollectShipment;
}
