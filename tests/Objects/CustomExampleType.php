<?php

use GraphQL\Type\Definition\Type;
use Absolvent\GraphQL\Support\Type as GraphQLType;

class CustomExampleType extends GraphQLType
{

    protected $attributes = [
        'name' => 'CustomExample',
        'description' => 'An example'
    ];

    public function fields()
    {
        return [
            'test' => [
                'type' => Type::string(),
                'description' => 'A test field'
            ]
        ];
    }
}
