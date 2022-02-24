<?php

namespace tejasroot\greenwing\Api;
 
/**
 * @api
 */
interface CategoryLinkManagementInterface
{
    /**
     * Get products assigned to a category
     *
     * @param  int $categoryId
     * @return $this
     */
    public function getAssignedProducts();
}
