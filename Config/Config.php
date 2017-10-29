<?php

namespace Config;

use OLOG\DB\ConnectorMySQL;
use OLOG\DB\DBConfig;

class Config
{
    static public function init(){
        CommonConfig::init();

        DBConfig::setConnector(CommonConfig::APP_CONNECTOR, new ConnectorMySQL('127.0.0.1', 'app', 'root', '1234'));
    }
}