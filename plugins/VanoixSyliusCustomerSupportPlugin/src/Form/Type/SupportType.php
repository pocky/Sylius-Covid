<?php
declare(strict_types=1);

namespace Vanoix\SyliusCustomerSupportPlugin\Form\Type;

use Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType;
use Sylius\Bundle\ChannelBundle\Form\Type\ChannelType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class SupportType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('channel', ChannelChoiceType::class, [
                'label' => 'vanoix_customer_support.form.support.channel.label'
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'vanoix_customer_support.form.support.phoneNumber.label'
            ]);
    }
}
