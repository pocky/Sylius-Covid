<?php
declare(strict_types=1);

namespace Vanoix\SyliusMailerPlugin\Mailer\Sender\Adapter;

use Sylius\Component\Mailer\Event\EmailSendEvent;
use Sylius\Component\Mailer\Model\EmailInterface;
use Sylius\Component\Mailer\Renderer\RenderedEmail;
use Sylius\Component\Mailer\Sender\Adapter\AbstractAdapter;
use Sylius\Component\Mailer\SyliusMailerEvents;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class SymfonyMailerAdapter extends AbstractAdapter
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(
        array $recipients,
        string $senderAddress,
        string $senderName,
        RenderedEmail $renderedEmail,
        EmailInterface $email,
        array $data,
        array $attachments = [],
        array $replyTo = []
    ): void {
        $message = (new Email())
            ->subject($renderedEmail->getSubject())
            ->from(new Address($senderAddress,$senderName))
            ->html($renderedEmail->getBody())
            ->text(strip_tags($renderedEmail->getBody()));

        foreach ($recipients as $address) {
            $message->addTo(new Address($address));
        }

        foreach ($replyTo as $address) {
            $message->addReplyTo(new Address($address));
        }

        foreach ($attachments as $attachment) {
            $message->attachFromPath($attachment);
        }

        $emailSendEvent = new EmailSendEvent(
            $message,
            $email,
            $data,
            $recipients,
            $replyTo
        );

        if ($this->dispatcher !== null) {
            $this->dispatcher->dispatch($emailSendEvent, SyliusMailerEvents::EMAIL_PRE_SEND);
        }

        $this->mailer->send($message);

        if ($this->dispatcher !== null) {
            $this->dispatcher->dispatch($emailSendEvent, SyliusMailerEvents::EMAIL_POST_SEND);
        }
    }
}
