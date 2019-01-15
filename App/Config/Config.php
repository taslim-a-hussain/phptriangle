<?php

namespace App\Config;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = '';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = '';

    /**
     * Database user
     * @var string
     */
    const DB_USER = '';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = '';


    const MAIL_DEBUG    = 0;
    const MAIL_HOST     = '';
    const MAIL_USERNAME = '';
    const MAIL_PASSWORD = '';
    const MAIL_SECURE   = ''; 
    const MAIL_PORT     = 587;


    const HTTP = 'http';
}
