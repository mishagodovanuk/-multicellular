<?php
namespace User\Model;

use App\Model\Model;

class Data extends Model
{
    public function getTableName()
    {
       return 'test';
    }
}