<?php

namespace App\Type;

use ApiPlatform\Core\GraphQl\Type\TypesContainerInterface;
use GraphQL\Type\Definition\Type as GraphQLType;

class TypesContainer implements TypesContainerInterface
{
    private TypesContainerInterface $defaultTypesContainer;

    /**
     * TypesContainer constructor.
     * @param TypesContainerInterface $defaultTypesContainer
     */
    public function __construct(TypesContainerInterface $defaultTypesContainer)
    {
        $this->defaultTypesContainer = $defaultTypesContainer;
    }

    /**
     * @param string $id
     * @param GraphQLType $type
     */
    public function set(string $id, GraphQLType $type): void
    {
        $this->defaultTypesContainer->set($id, $type);
    }

    /**
     * @param string $id
     * @return GraphQLType
     */
    public function get($id): GraphQLType
    {
        return $this->defaultTypesContainer->get($id);
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->defaultTypesContainer->all();
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has($id): bool
    {
        return $this->defaultTypesContainer->has($id);
    }
}
