<?php

namespace Shopify\Enum\Fields;

class InventoryItemFields extends AbstractObjectEnum
{
    const ID = 'id';
    const SKU = 'sku';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const COST = 'cost';
    const TRACKED = 'tracked';

    public function getFieldTypes()
    {
        return array(
            'id' => 'integer',
            'sku' => 'string',
            'created_at' => 'DateTime',
            'updated_at' => 'DateTime',
            'cost' => 'string',
            'tracked' => 'boolean',
        );
    }
}
