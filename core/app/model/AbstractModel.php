<?php

namespace App\Model;

use App\Model\AbstractDB;

/**
 * Class AbstractModel
 *
 * @package App\Model
 */
class AbstractModel
{
    /**
     * PDO database connect.
     *
     * @var \PDO
     */
    protected $_db_manager;

    /**
     * AbstractModel constructor.
     */
    public function __construct()
    {
        $db = new AbstractDB();

        $this->_db_manager = $db->runDatabase();
    }

    /**
     * Get all data from current table.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->_db_manager->query("SELECT * FROM " . static::TABLE_NAME);
    }
}
