<?php

namespace App\Model;

use App\Model\AbstractDB;

class AbstractModel
{
    protected $_db_manager;

    public function __construct()
    {
        $db = new AbstractDB();

        $this->_db_manager = $db->runDatabase();
    }
}