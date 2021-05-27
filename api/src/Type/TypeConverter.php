<?php

namespace App\Type;

use ApiPlatform\Core\GraphQl\Type\TypeConverterInterface;
use GraphQL\Type\Definition\Type as GraphQLType;
use Symfony\Component\PropertyInfo\Type;

final class TypeConverter implements TypeConverterInterface
{
    private TypeConverterInterface $defaultTypeConverter;
    private TypesContainer $typesContainer;

    /**
     * TypeConverter constructor.
     * @param TypeConverterInterface $defaultTypeConverter
     */
    public function __construct(TypeConverterInterface $defaultTypeConverter, TypesContainer $typesContainer)
    {
        $this->defaultTypeConverter = $defaultTypeConverter;
        $this->typesContainer = $typesContainer;
    }

    /**
     * {@inheritdoc}
     */
    public function convertType(Type $type, bool $input, ?string $queryName, ?string $mutationName, ?string $subscriptionName, string $resourceClass, string $rootResource, ?string $property, int $depth)
    {
        dump($this->typesContainer->all()); // it works

        return $this->defaultTypeConverter->convertType($type, $input, $queryName, $mutationName, $subscriptionName, $resourceClass, $rootResource, $property, $depth);
    }

    /**
     * @inheritDoc
     */
    public function resolveType(string $type): ?GraphQLType
    {
        return $this->defaultTypeConverter->resolveType($type);
    }
}
