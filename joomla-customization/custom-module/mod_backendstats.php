<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$data = ModBackendStatsHelper::getStats();

require JModuleHelper::getLayoutPath('mod_backendstats', $params->get('layout', 'default'));
