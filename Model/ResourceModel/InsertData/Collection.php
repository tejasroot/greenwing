<?php

/**
 *
 * @package    GreeenwingTechnology
 * @subpackage GreewingTechnology
 * @author     Squiz Pty Ltd <products@squiz.net>
 * @copyright  1997-2005 The Greenwing Technology
 */

namespace tejasroot\greenwing\Model\ResourceModel\InsertData;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init("tejasroot\greenwing\Model\InsertData", "tejasroot\greenwing\Model\ResourceModel\InsertData");
    }
}
