<?php

/**
 *
 * @package    GreeenwingTechnology
 * @subpackage GreewingTechnology
 * @author     Squiz Pty Ltd <products@squiz.net>
 * @copyright  1997-2005 The Greenwing Technology
 */

namespace tejasroot\greenwing\Model\ResourceModel\InsertCartData;

use tejasroot\greenwing\Model\InsertCartData as ModelInsertCartData;
use tejasroot\greenwing\Model\ResourceModel\InsertCartData as ResourceInsertCartData;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init(ModelInsertCartData::class, ResourceInsertCartData::class);
    }
}
