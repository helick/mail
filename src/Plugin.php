<?php

namespace Helick\Mail;

use Helick\Contracts\Bootable;
use PHPMailer;

final class Plugin implements Bootable
{
    /**
     * Boot the service.
     *
     * @return void
     */
    public static function boot(): void
    {
        $self = new static;

        add_action('phpmailer_init', [$self, 'setup']);
        add_filter('wp_mail_from_name', [$self, 'fromName']);
        add_filter('wp_mail_from', [$self, 'fromAddress']);
    }

    /**
     * Setup the SMTP connection.
     *
     * @param PHPMailer $mailer
     *
     * @return void
     */
    public function setup(PHPMailer $mailer): void
    {
        $mailer->isSMTP();
        $mailer->SMTPAuth = true;

        $mailer->Host     = host();
        $mailer->Port     = port();
        $mailer->Username = user();
        $mailer->Password = password();
    }

    /**
     * Setup "From Name" header.
     *
     * @return string
     */
    public function fromName(): string
    {
        return from_name();
    }

    /**
     * Setup "From Address" header.
     *
     * @return string
     */
    public function fromAddress(): string
    {
        return from_address();
    }
}
