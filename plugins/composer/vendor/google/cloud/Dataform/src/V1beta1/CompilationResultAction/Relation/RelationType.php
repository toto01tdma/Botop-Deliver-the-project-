<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\CompilationResultAction\Relation;

use UnexpectedValueException;

/**
 * Indicates the type of this relation.
 *
 * Protobuf type <code>google.cloud.dataform.v1beta1.CompilationResultAction.Relation.RelationType</code>
 */
class RelationType
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>RELATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const RELATION_TYPE_UNSPECIFIED = 0;
    /**
     * The relation is a table.
     *
     * Generated from protobuf enum <code>TABLE = 1;</code>
     */
    const TABLE = 1;
    /**
     * The relation is a view.
     *
     * Generated from protobuf enum <code>VIEW = 2;</code>
     */
    const VIEW = 2;
    /**
     * The relation is an incrementalized table.
     *
     * Generated from protobuf enum <code>INCREMENTAL_TABLE = 3;</code>
     */
    const INCREMENTAL_TABLE = 3;
    /**
     * The relation is a materialized view.
     *
     * Generated from protobuf enum <code>MATERIALIZED_VIEW = 4;</code>
     */
    const MATERIALIZED_VIEW = 4;

    private static $valueToName = [
        self::RELATION_TYPE_UNSPECIFIED => 'RELATION_TYPE_UNSPECIFIED',
        self::TABLE => 'TABLE',
        self::VIEW => 'VIEW',
        self::INCREMENTAL_TABLE => 'INCREMENTAL_TABLE',
        self::MATERIALIZED_VIEW => 'MATERIALIZED_VIEW',
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

