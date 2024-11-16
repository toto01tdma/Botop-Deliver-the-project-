<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DEPRECATED. This message only presents for the purpose of
 * backward-compatibility. The server will never populate this message in
 * responses.
 * The relationship attributes which include  `type`, `source_resource_type`,
 * `target_resource_type` and `action`.
 *
 * @deprecated
 * Generated from protobuf message <code>google.cloud.asset.v1.RelationshipAttributes</code>
 */
class RelationshipAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the relationship type. Example:
     * `INSTANCE_TO_INSTANCEGROUP`
     *
     * Generated from protobuf field <code>string type = 4;</code>
     */
    private $type = '';
    /**
     * The source asset type. Example: `compute.googleapis.com/Instance`
     *
     * Generated from protobuf field <code>string source_resource_type = 1;</code>
     */
    private $source_resource_type = '';
    /**
     * The target asset type. Example: `compute.googleapis.com/Disk`
     *
     * Generated from protobuf field <code>string target_resource_type = 2;</code>
     */
    private $target_resource_type = '';
    /**
     * The detail of the relationship, e.g. `contains`, `attaches`
     *
     * Generated from protobuf field <code>string action = 3;</code>
     */
    private $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The unique identifier of the relationship type. Example:
     *           `INSTANCE_TO_INSTANCEGROUP`
     *     @type string $source_resource_type
     *           The source asset type. Example: `compute.googleapis.com/Instance`
     *     @type string $target_resource_type
     *           The target asset type. Example: `compute.googleapis.com/Disk`
     *     @type string $action
     *           The detail of the relationship, e.g. `contains`, `attaches`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the relationship type. Example:
     * `INSTANCE_TO_INSTANCEGROUP`
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The unique identifier of the relationship type. Example:
     * `INSTANCE_TO_INSTANCEGROUP`
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The source asset type. Example: `compute.googleapis.com/Instance`
     *
     * Generated from protobuf field <code>string source_resource_type = 1;</code>
     * @return string
     */
    public function getSourceResourceType()
    {
        return $this->source_resource_type;
    }

    /**
     * The source asset type. Example: `compute.googleapis.com/Instance`
     *
     * Generated from protobuf field <code>string source_resource_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_resource_type = $var;

        return $this;
    }

    /**
     * The target asset type. Example: `compute.googleapis.com/Disk`
     *
     * Generated from protobuf field <code>string target_resource_type = 2;</code>
     * @return string
     */
    public function getTargetResourceType()
    {
        return $this->target_resource_type;
    }

    /**
     * The target asset type. Example: `compute.googleapis.com/Disk`
     *
     * Generated from protobuf field <code>string target_resource_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_resource_type = $var;

        return $this;
    }

    /**
     * The detail of the relationship, e.g. `contains`, `attaches`
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The detail of the relationship, e.g. `contains`, `attaches`
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

}

