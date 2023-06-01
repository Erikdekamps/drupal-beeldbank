<?php

// @codingStandardsIgnoreFile
$databases = [];
#$settings['config_sync_directory'] = 'profiles/beeldbank/config/sync';
$settings['config_sync_directory'] = '../config/sync';
$settings['hash_salt'] = '';
$settings['update_free_access'] = FALSE;
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '../private-files';
$settings['file_temp_path'] = '../private-files/tmp';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
if (file_exists(__DIR__ . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include __DIR__ . '/settings.ddev.php';
}
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
