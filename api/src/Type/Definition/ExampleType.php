<?php

namespace App\Type\Definition;

use ApiPlatform\Core\GraphQl\Type\Definition\TypeInterface;
use App\Type\TypesContainer;
use GraphQL\Type\Definition\InputObjectType;

final class ExampleType extends InputObjectType implements TypeInterface
{
    private TypesContainer $typesContainer;

    /**
     * RoadTransportRootUpdateType constructor.
     * @param TypesContainer $typesContainer
     */
    public function __construct(TypesContainer $typesContainer)
    {
        $this->typesContainer = $typesContainer;

        $config = [
            // Note: 'name' is not needed in this form:
            // it will be inferred from class name by omitting namespace and dropping "Type" suffix
            'fields' => [
                'id' => [
                    'type' => self::id()
                ],
                'status' => [
                    'type' => self::nonNull(self::string())
                ],
            ]
        ];

        parent::__construct($config);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function serialize($value)
    {
        // TODO: Implement serialize() method.
    }

    public function parseValue($value)
    {
        // TODO: Implement parseValue() method.
    }

    public function parseLiteral($valueNode, ?array $variables = null)
    {
        // TODO: Implement parseLiteral() method.
    }
}
