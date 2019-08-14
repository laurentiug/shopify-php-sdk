<?php

namespace Shopify\Service;

use Shopify\Object\InventoryLevel;
use Shopify\Object\InventoryAdjustment;
use Shopify\Object\InventoryLevelAdjustment;

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

    /**
     * Adjusts the inventory level of an inventory item at a single location
     * 
     * @param InventoryAdjustment $inventoryAdjustment
     * @return InventoryLevel
     */
    public function adjust(InventoryAdjustment $inventoryAdjustment)
    {
        $data = $inventoryAdjustment->exportData();
        $endpoint = '/admin/inventory_levels/adjust.json';
        $response = $this->request($endpoint, 'POST', $data);
        
        return $this->createObject(InventoryLevel::class, $response['inventory_level']);
    }
}
