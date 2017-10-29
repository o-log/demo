<?php

namespace App;

use OLOG\ActionInterface;
use OLOG\BT\LayoutBootstrap4;
use OLOG\CRUD\CForm;
use OLOG\CRUD\CTable;
use OLOG\CRUD\FGroup;
use OLOG\CRUD\FRow;
use OLOG\CRUD\FWInput;
use OLOG\CRUD\FWTextarea;
use OLOG\CRUD\TCol;
use OLOG\CRUD\TFLikeInline;
use OLOG\CRUD\TWDelete;
use OLOG\CRUD\TWText;
use OLOG\CRUD\TWTimestamp;
use PHPModelDemo\DemoModel;

class HomeAction extends PublicActionsBase implements ActionInterface
{
    public function url(){
        return '/';
    }

    public function action()
    {
        LayoutBootstrap4::render(function(){
            ?>
            <h1>Welcome to applcation!</h1>
            <?php

        }, $this);
    }

}