<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/table.proto

namespace Google\Cloud\BigQuery\Storage\V1\TableFieldSchema;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.bigquery.storage.v1.TableFieldSchema.Type</code>
 */
class Type
{
    /**
     * Illegal value
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * 64K, UTF8
     *
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * 64-bit signed
     *
     * Generated from protobuf enum <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * 64-bit IEEE floating point
     *
     * Generated from protobuf enum <code>DOUBLE = 3;</code>
     */
    const DOUBLE = 3;
    /**
     * Aggregate type
     *
     * Generated from protobuf enum <code>STRUCT = 4;</code>
     */
    const STRUCT = 4;
    /**
     * 64K, Binary
     *
     * Generated from protobuf enum <code>BYTES = 5;</code>
     */
    const BYTES = 5;
    /**
     * 2-valued
     *
     * Generated from protobuf enum <code>BOOL = 6;</code>
     */
    const BOOL = 6;
    /**
     * 64-bit signed usec since UTC epoch
     *
     * Generated from protobuf enum <code>TIMESTAMP = 7;</code>
     */
    const TIMESTAMP = 7;
    /**
     * Civil date - Year, Month, Day
     *
     * Generated from protobuf enum <code>DATE = 8;</code>
     */
    const DATE = 8;
    /**
     * Civil time - Hour, Minute, Second, Microseconds
     *
     * Generated from protobuf enum <code>TIME = 9;</code>
     */
    const TIME = 9;
    /**
     * Combination of civil date and civil time
     *
     * Generated from protobuf enum <code>DATETIME = 10;</code>
     */
    const DATETIME = 10;
    /**
     * Geography object
     *
     * Generated from protobuf enum <code>GEOGRAPHY = 11;</code>
     */
    const GEOGRAPHY = 11;
    /**
     * Numeric value
     *
     * Generated from protobuf enum <code>NUMERIC = 12;</code>
     */
    const NUMERIC = 12;
    /**
     * BigNumeric value
     *
     * Generated from protobuf enum <code>BIGNUMERIC = 13;</code>
     */
    const BIGNUMERIC = 13;
    /**
     * Interval
     *
     * Generated from protobuf enum <code>INTERVAL = 14;</code>
     */
    const INTERVAL = 14;
    /**
     * JSON, String
     *
     * Generated from protobuf enum <code>JSON = 15;</code>
     */
    const JSON = 15;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::STRING => 'STRING',
        self::INT64 => 'INT64',
        self::DOUBLE => 'DOUBLE',
        self::STRUCT => 'STRUCT',
        self::BYTES => 'BYTES',
        self::BOOL => 'BOOL',
        self::TIMESTAMP => 'TIMESTAMP',
        self::DATE => 'DATE',
        self::TIME => 'TIME',
        self::DATETIME => 'DATETIME',
        self::GEOGRAPHY => 'GEOGRAPHY',
        self::NUMERIC => 'NUMERIC',
        self::BIGNUMERIC => 'BIGNUMERIC',
        self::INTERVAL => 'INTERVAL',
        self::JSON => 'JSON',
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
class_alias(Type::class, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema_Type::class);

