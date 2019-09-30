<?php

namespace App\System;

abstract class Logger
{
    public static function log($value)
    {
        self::setPermission();

        file_put_contents(SITE_ROOT . '/var/log/error.log', $value);
    }

    protected static function setPermission()
    {
        //chmod(SITE_ROOT . '/var/log/error.log', 0755);
        exec('sudo chmod -R 777 ' . SITE_ROOT . '/var/log/error.log');
    }

    protected static function createErrorLogFile()
    {
        if (!file_exists(SITE_ROOT. '/var/log/error.log')) {

        }
    }
}
