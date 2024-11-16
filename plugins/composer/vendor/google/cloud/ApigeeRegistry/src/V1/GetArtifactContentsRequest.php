<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetArtifactContents.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.GetArtifactContentsRequest</code>
 */
class GetArtifactContentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the artifact whose contents should be retrieved.
     * Format: `{parent}/artifacts/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the artifact whose contents should be retrieved.
     *                     Format: `{parent}/artifacts/*`
     *                     Please see {@see RegistryClient::artifactName()} for help formatting this field.
     *
     * @return \Google\Cloud\ApigeeRegistry\V1\GetArtifactContentsRequest
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
     *           Required. The name of the artifact whose contents should be retrieved.
     *           Format: `{parent}/artifacts/&#42;`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the artifact whose contents should be retrieved.
     * Format: `{parent}/artifacts/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the artifact whose contents should be retrieved.
     * Format: `{parent}/artifacts/&#42;`
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

