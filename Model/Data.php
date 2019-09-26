<?php
namespace User\Model;

use App\Model\AbstractModel;

class Data extends AbstractModel
{
    const TABLE_NAME = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserData()
    {
        return $this->_db_manager->query("SELECT * FROM " . static::TABLE_NAME);
    }
}