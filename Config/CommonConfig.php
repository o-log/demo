<?php

namespace Config;

use OLOG\Auth\AuthConfig;
use OLOG\BT\LayoutBootstrap4;
use OLOG\Cache\BucketMemcache;
use OLOG\Cache\CacheConfig;
use OLOG\Cache\MemcacheServer;
use OLOG\DB\ConnectorMySQL;
use OLOG\DB\DBConfig;
use OLOG\DB\Space;
use OLOG\Layouts\LayoutsConfig;

class CommonConfig
{
    const APP_CONNECTOR = 'APP_CONNECTOR';
    const APP_SPACE = 'APP_SPACE';

    static public function init(){
        ini_set('assert.exception', true);

        DBConfig::setConnector(self::APP_CONNECTOR, new ConnectorMySQL('127.0.0.1', 'app', 'root', '1234'));

        DBConfig::setSpace(AuthConfig::SPACE_PHPAUTH, new Space(self::APP_CONNECTOR, __DIR__ . '/../vendor/o-log/php-auth/db_phpauth.sql'));
        DBConfig::setSpace(self::APP_SPACE, new Space(self::APP_CONNECTOR, __DIR__ . '/../app.sql'));

        CacheConfig::setBucket('', new BucketMemcache([new MemcacheServer('127.0.0.1', 11211)]));

        LayoutsConfig::setAdminLayoutClassName(LayoutBootstrap4::class);
    }
}
