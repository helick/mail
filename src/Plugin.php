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

        $mailer->Host     = defined('MAIL_HOST') ? MAIL_HOST : '';
        $mailer->Port     = defined('MAIL_PORT') ? MAIL_PORT : 587;
        $mailer->Username = defined('MAIL_USER') ? MAIL_USER : '';
        $mailer->Password = defined('MAIL_PASSWORD') ? MAIL_PASSWORD : '';
    }

    /**
     * Setup "From Name" header.
     *
     * @return string
     */
    public function fromName(): string
    {
        return defined('MAIL_FROM_NAME')
            ? MAIL_FROM_NAME
            : get_bloginfo('blogname', 'raw');
    }

    /**
     * Setup "From Address" header.
     *
     * @return string
     */
    public function fromAddress(): string
    {
        return defined('MAIL_FROM_ADDRESS')
            ? MAIL_FROM_ADDRESS
            : get_bloginfo('admin_email', 'raw');
    }
}
