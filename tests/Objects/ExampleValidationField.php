<?php

use GraphQL\Type\Definition\Type;
use Absolvent\GraphQL\Support\Field;

class ExampleValidationField extends Field
{

    protected $attributes = [
        'name' => 'example_validation'
    ];

    public function type()
    {
        return Type::listOf(Type::string());
    }

    public function args()
    {
        return [
            'index' => [
                'name' => 'index',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return ['test'];
    }
}
