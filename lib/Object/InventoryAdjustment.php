<?php

namespace Shopify\Object;

use Shopify\Enum\Fields\InventoryAdjustmentFields;

class InventoryAdjustment extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return InventoryAdjustmentFields::getInstance();
    }
}
