<?php

namespace Rebing\GraphQL\Support;

use GraphQL\Type\Definition\InputObjectType;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Type\Definition\DirectionEnum;

class SortType extends InputObjectType
{
    const FIELD_FIELD = 'field';
    const FIELD_DIRECTION = 'direction';

    public function __construct(string $typeName, string $customName = null)
    {
        $name = $customName ?: $typeName.'InputType';

        $config = [
            'name' => $name,
            'fields' => $this->getSortFields($typeName)
        ];

        parent::__construct($config);
    }

    protected function getSortFields($typeName): array
    {
        return [
            [
                'name' => self::FIELD_FIELD,
                'type' => GraphQL::type($typeName),
                'description' => 'List of fields',
            ],
            [
                'name' => self::FIELD_DIRECTION,
                'type' => GraphQL::type(DirectionEnum::TYPE_NAME),
                'description' => 'Sorting direction'
            ]
        ];
    }
}
