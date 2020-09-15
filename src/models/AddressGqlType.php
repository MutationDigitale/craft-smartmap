<?php

namespace doublesecretagency\smartmap\models;

use craft\gql\GqlEntityRegistry;
use fruitstudios\linkit\generators\LinkitType;
use GraphQL\Type\Definition\InterfaceType;
use GraphQL\Type\Definition\Type;

/**
 * Class AddressGqlType
 * @package doublesecretagency\smartmap\models
 */
class AddressGqlType
{
    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'addressField_Address';
    }

    /**
     * @return Type
     */
    public static function getType()
    {
        if ($type = GqlEntityRegistry::getEntity(self::class)) {
            return $type;
        }

        $type = GqlEntityRegistry::createEntity(
            self::class,
            new InterfaceType(
                [
                    'name' => static::getName(),
                    'fields' => self::class . '::getFieldDefinitions',
                ]
            )
        );

        return $type;
    }

    /**
     * @return array
     */
    public static function getFieldDefinitions(): array
    {
        return [
            'lat' => [
                'name' => 'lat',
                'type' => Type::string()
            ],
            'lng' => [
                'name' => 'lng',
                'type' => Type::string()
            ]
        ];
    }
}
