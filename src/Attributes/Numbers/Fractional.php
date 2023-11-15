<?php

namespace Nexa\Attributes\Numbers;

use Attribute;
use Doctrine\DBAL\Types\Types;
use Nexa\Attributes\AttributeType;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Fractional extends AttributeType
{

    protected string $value = Types::FLOAT;

}