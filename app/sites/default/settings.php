<?php
$databases['default']['default'] = array (
  'database' => getenv('DB_NAME'),
  'username' => getenv('DB_USER'),
  'password' => getenv('DB_PASSWORD'),
  'prefix' => getenv('DB_PREFIX'),
  'host' => getenv('DB_HOST'),
  'port' => getenv('DB_PORT'),
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['hash_salt'] = 'OziFqBAKG5R1CRFr7kQyAi8yhniGz33mVIOTGeaGj86gZWnsYqkGS2RzL9oskLVSpeyFxK4b5A';
$settings['config_sync_directory'] = 'sites/default/files/config_xIQALKGTS8aJaaaDM2aDIbpBOQ3njC_1p0vP8Hvd2znKnGb5nk5_pgxGnmeTwjZJYpfrsH85IQ/sync';
