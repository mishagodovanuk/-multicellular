<?php
namespace App\Model;

use PDO;

class Model
{
    private $_db_host;
    private $_db_name;
    private $_db_charset;
    private $_db_user;
    private $_db_pass;

    protected $entity;

    private function getDbConfig()
    {
        require_once  SITE_ROOT . '/etc/db_config.php';

        $this->_db_host = $db_config['host'];
        $this->_db_name = $db_config['dbname'];
        $this->_db_charset = $db_config['coding'];
        $this->_db_user = $db_config['user'];
        $this->_db_pass = $db_config['password'];
    }

    private function connect()
    {
        $dsn = "mysql:host=$this->_db_host;dbname=$this->_db_name;charset=$this->_db_charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $this->_db_user, $this->_db_pass, $opt);
        $this->entity = $pdo;
    }

    public function create()
    {
        $this->getDbConfig();
        $this->connect();
        return $this;
    }

    public function gedTableData()
    {
        $data = $this->entity->query("SELECT * FROM test");
        return $data->fetchAll();
    }
}