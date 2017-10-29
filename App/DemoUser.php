<?php

namespace App;

use OLOG\Model\ActiveRecordInterface;
use OLOG\Model\ActiveRecordTrait;
use OLOG\Model\ProtectPropertiesTrait;

class DemoUser implements
    ActiveRecordInterface
{
    use ActiveRecordTrait;
    use ProtectPropertiesTrait;

    const DB_ID = 'PHPADMIN_SPACE';
    const DB_TABLE_NAME = 'phpadmin_demomodel';

    const _ID = 'id'; // field names constants for CRUD
    const _CREATED_AT_TS = 'created_at_ts';
    
    public $created_at_ts; // initialized by constructor
    const _LOGIN = 'login';
    public $login;
    const _DESCRIPTION = 'description';
    public $description;
    protected $id;

    public function __construct(){
        $this->created_at_ts = time();
    }

    public function getId()
    {
        return $this->id;
    }

    static public function idsByCreatedAtDesc($offset = 0, $page_size = 30){
        $ids_arr = \OLOG\DB\DB::readColumn(
            self::DB_ID,
            'select ' . self::_ID . ' from ' . self::DB_TABLE_NAME . ' order by ' . self::_CREATED_AT_TS . ' desc limit ? offset ?',
            [$page_size, $offset]
        );
        return $ids_arr;
    }
}