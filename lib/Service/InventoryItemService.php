<?php

namespace Shopify\Service;

use Shopify\Object\InventoryItem;

class InventoryItemService extends AbstractService
{
    /**
     * Receive a single inventory item
     *
     * @link   https://help.shopify.com/en/api/reference/inventory/inventoryitem#show
     * @param  integer $inventoryItemId
     * @return InventoryItem
     */
    public function get($inventoryItemId)
    {
        $endpoint = '/admin/inventory_items/'.$inventoryItemId.'.json';
        $response = $this->request($endpoint, 'GET');
        return $this->createObject(InventoryItem::class, $response['inventory_item']);
    }
}
