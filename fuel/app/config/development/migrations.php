<?php
return array (
  'version' => 
  array (
    'app' => 
    array (
      'default' => 
      array (
        0 => '001_create_users',
        1 => '002_create_users_clients',
        2 => '003_create_users_groups',
        3 => '004_create_users_group_permissions',
        4 => '005_create_users_group_roles',
        5 => '006_create_users_metadatas',
        6 => '007_create_users_permissions',
        7 => '008_create_users_providers',
        8 => '009_create_users_roles',
        9 => '010_create_users_role_permissions',
        10 => '011_create_users_scopes',
        11 => '012_create_users_sessions',
        12 => '013_create_users_sessionscopes',
        13 => '014_create_users_user_permissions',
        14 => '015_create_users_user_roles',
      ),
    ),
    'module' => 
    array (
    ),
    'package' => 
    array (
      'auth' => 
      array (
        0 => '001_auth_create_usertables',
        1 => '002_auth_create_grouptables',
        2 => '003_auth_create_roletables',
        3 => '004_auth_create_permissiontables',
        4 => '005_auth_create_authdefaults',
        5 => '006_auth_add_authactions',
        6 => '007_auth_add_permissionsfilter',
        7 => '008_auth_create_providers',
        8 => '009_auth_create_oauth2tables',
        9 => '010_auth_fix_jointables',
      ),
    ),
  ),
  'folder' => 'migrations/',
  'table' => 'migration',
);
