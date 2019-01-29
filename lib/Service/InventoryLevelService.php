<?php

namespace Shopify\Service;

use Shopify\Object\InventoryLevel;

class InventoryLevelService extends AbstractService
{
    /**
     * Receive a lists of all inventory levels
     *
     * @link   https://help.shopify.com/en/api/reference/inventory/inventorylevel#index
     * @param  array $params
     * @return InventoryLevel[]
     */
    public function all(array $params)
    {
        $endpoint = '/admin/inventory_levels.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createCollection(InventoryLevel::CLASS, $response['inventory_levels']);
    }
}
