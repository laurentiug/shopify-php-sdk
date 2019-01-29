<?php

namespace Shopify\Object;

use Shopify\Enum\Fields\InventoryItemFields;

class InventoryItem extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return InventoryItemFields::getInstance();
    }
}
