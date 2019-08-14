<?php

namespace Shopify\Enum\Fields;

class InventoryAdjustmentFields extends AbstractObjectEnum
{
    const INVENTORY_ITEM_ID = 'inventory_item_id';
    const LOCATION_ID = 'location_id';
    const AVAILABLE_ADJUSTMENT = 'available_adjustment';

    public function getFieldTypes()
    {
        return array(
            'location_id' => 'integer',
            'inventory_item_id' => 'integer',
            'available_adjustment' => 'integer',
        );
    }
}
