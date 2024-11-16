<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/queue.proto

namespace Google\Cloud\Tasks\V2beta3\Queue;

use UnexpectedValueException;

/**
 * The type of the queue.
 *
 * Protobuf type <code>google.cloud.tasks.v2beta3.Queue.Type</code>
 */
class Type
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * A pull queue.
     *
     * Generated from protobuf enum <code>PULL = 1;</code>
     */
    const PULL = 1;
    /**
     * A push queue.
     *
     * Generated from protobuf enum <code>PUSH = 2;</code>
     */
    const PUSH = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PULL => 'PULL',
        self::PUSH => 'PUSH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Tasks\V2beta3\Queue_Type::class);
