<?php

namespace Helick\Mail;

/**
 * Get the mail host.
 *
 * @return string
 */
function host(): string
{
    return defined('MAIL_HOST') ? MAIL_HOST : '';
}

/**
 * Get the mail port.
 *
 * @return int
 */
function port(): int
{
    return defined('MAIL_PORT') ? MAIL_PORT : 587;
}

/**
 * Get the mail user.
 *
 * @return string
 */
function user(): string
{
    return defined('MAIL_USER') ? MAIL_USER : '';
}

/**
 * Get the mail password.
 *
 * @return string
 */
function password(): string
{
    return defined('MAIL_PASSWORD') ? MAIL_PASSWORD : '';
}

/**
 * Get the mail "From Name" header.
 *
 * @return string
 */
function from_name(): string
{
    return defined('MAIL_FROM_NAME')
        ? MAIL_FROM_NAME
        : get_bloginfo('blogname', 'raw');
}

/**
 * Get the mail "From Address" header.
 *
 * @return string
 */
function from_address(): string
{
    return defined('MAIL_FROM_ADDRESS')
        ? MAIL_FROM_ADDRESS
        : get_bloginfo('admin_email', 'raw');
}
