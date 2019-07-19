<?php

namespace Rebing\GraphQL\Type\Definition;

use Rebing\GraphQL\Support\Type as GraphQLType;

class DirectionEnum extends GraphQLType
{
    const TYPE_NAME = 'DirectionEnum';
    const ORDER_BY_ASC = 'ASC';
    const ORDER_BY_DESC = 'DESC';

    protected $enumObject = true;

    protected $attributes = [
        'name' => self::TYPE_NAME,
        'description' => 'Sorting direction',
        'values' => [
            self::ORDER_BY_ASC,
            self::ORDER_BY_DESC
        ]
    ];
}
