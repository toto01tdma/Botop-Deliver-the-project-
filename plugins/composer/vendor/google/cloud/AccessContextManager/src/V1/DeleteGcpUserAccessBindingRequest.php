<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of [DeleteGcpUserAccessBinding]
 * [google.identity.accesscontextmanager.v1.AccessContextManager.DeleteGcpUserAccessBinding].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.DeleteGcpUserAccessBindingRequest</code>
 */
class DeleteGcpUserAccessBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *                     Please see {@see AccessContextManagerClient::gcpUserAccessBindingName()} for help formatting this field.
     *
     * @return \Google\Identity\AccessContextManager\V1\DeleteGcpUserAccessBindingRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

