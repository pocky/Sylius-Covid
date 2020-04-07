<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $customer = $menu->getChild('customers');
        $customer
            ->addChild('supports', [
                'route' => 'vanoix_customer_support_admin_support_index'
            ])
            ->setLabel('vanoix_customer_support.menu.admin.main.customer.supports')
            ->setLabelAttribute('icon', 'phone');
    }
}
