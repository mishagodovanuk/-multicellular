<?php
namespace User\Model;

use App\Model\AbstractModel;

/**
 * Class Data
 *
 * @package User\Model
 */
class Data extends AbstractModel
{
    /**
     * Table name.
     */
    const TABLE_NAME = 'users';

    /**
     * Data constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
