<?php
defined('_JEXEC') or die;

class ModBackendStatsHelper
{
    public static function getStats()
    {
        return [
            'server_time' => date("Y-m-d H:i:s"),
            'php_version' => phpversion(),
            'joomla_version' => JVERSION
        ];
    }
}
