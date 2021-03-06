<?php

declare(strict_types=1);

namespace Rebing\GraphQL\Tests\Unit\ValidationAuthorizationTests;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class ValidationAndAuthorizationMutation extends Mutation
{
    protected $attributes = [
        'name' => 'validationAndAuthorization',
    ];

    public function authorize(array $args): bool
    {
        return $args['arg1'] === 'value1';
    }

    public function type(): Type
    {
        return Type::nonNull(Type::string());
    }

    public function args(): array
    {
        return [
            'arg1' => [
                'type' => Type::string(),
                'rules' => 'in:value1',
            ],
        ];
    }

    public function resolve(): string
    {
        return 'value';
    }
}
