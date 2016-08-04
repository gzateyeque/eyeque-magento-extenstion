<?php
/**
 * Copyright © 2016 EyeQue. All rights reserved.
 * Yuan Xiong
 */

     
namespace EyeQue\SocialAccessToken\Model\Resource;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class SocialAccess extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('plumrocket_sociallogin_account', 'id');
    }
}
