<?php
// This file generated by Propel 1.6.5 convert-conf target
// from XML runtime conf file /Users/gka/clients/datawrapper/1.0/lib/core/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'datawrapper' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=' . DW_DB_NAME,
        'user' => DW_DB_USER,
        'password' => DW_DB_PWD,
      ),
    ),
    'default' => 'datawrapper',
  ),
  'generator_version' => '1.6.5',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-datawrapper-conf.php');
return $conf;
