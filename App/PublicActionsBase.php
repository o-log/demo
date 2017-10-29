<?php

namespace App;

use OLOG\Layouts\MenuInterface;
use OLOG\Layouts\MenuItem;

class PublicActionsBase implements MenuInterface
{
    static public function menuArr(){
        $menu_arr = [];

        $menu_arr[] = new MenuItem('Menu item 1', '/1');
        $menu_arr[] = new MenuItem('Menu item 2', '/2');

        return $menu_arr;
    }
}