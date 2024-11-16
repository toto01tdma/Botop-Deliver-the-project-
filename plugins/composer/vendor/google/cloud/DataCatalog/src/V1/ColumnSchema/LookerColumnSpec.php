<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/schema.proto

namespace Google\Cloud\DataCatalog\V1\ColumnSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Column info specific to Looker System.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec</code>
 */
class LookerColumnSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Looker specific column type of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec.LookerColumnType type = 1;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Looker specific column type of this column.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Looker specific column type of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec.LookerColumnType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Looker specific column type of this column.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec.LookerColumnType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec\LookerColumnType::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LookerColumnSpec::class, \Google\Cloud\DataCatalog\V1\ColumnSchema_LookerColumnSpec::class);

