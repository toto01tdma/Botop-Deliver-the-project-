<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\SupportedDatabaseFlag;

use UnexpectedValueException;

/**
 * ValueType describes the semantic type of the value that the flag accepts.
 * Regardless of the ValueType, the Instance.database_flags field accepts the
 * stringified version of the value, i.e. "20" or "3.14".
 *
 * Protobuf type <code>google.cloud.alloydb.v1alpha.SupportedDatabaseFlag.ValueType</code>
 */
class ValueType
{
    /**
     * This is an unknown flag type.
     *
     * Generated from protobuf enum <code>VALUE_TYPE_UNSPECIFIED = 0;</code>
     */
    const VALUE_TYPE_UNSPECIFIED = 0;
    /**
     * String type flag.
     *
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * Integer type flag.
     *
     * Generated from protobuf enum <code>INTEGER = 2;</code>
     */
    const INTEGER = 2;
    /**
     * Float type flag.
     *
     * Generated from protobuf enum <code>FLOAT = 3;</code>
     */
    const FLOAT = 3;
    /**
     * Denotes that the flag does not accept any values.
     *
     * Generated from protobuf enum <code>NONE = 4;</code>
     */
    const NONE = 4;

    private static $valueToName = [
        self::VALUE_TYPE_UNSPECIFIED => 'VALUE_TYPE_UNSPECIFIED',
        self::STRING => 'STRING',
        self::INTEGER => 'INTEGER',
        self::FLOAT => 'FLOAT',
        self::NONE => 'NONE',
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


