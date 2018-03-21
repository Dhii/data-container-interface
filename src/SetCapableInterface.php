<?php

namespace Dhii\Data\Container;

use Dhii\Util\String\StringableInterface as Stringable;
use Psr\Container\ContainerExceptionInterface;

/**
 * Exposes means of setting data on an object.
 *
 * @since [*next-version*]
 */
interface SetCapableInterface
{
    /**
     * Sets the value of a data member with the specified key.
     *
     * @since [*next-version*]
     *
     * @param string|int|float|bool|Stringable $key   The key of the data member to set.
     * @param mixed                            $value The value to set.
     *
     * @throws ContainerExceptionInterface If the data could not be set.
     */
    public function set($key, $value);
}
