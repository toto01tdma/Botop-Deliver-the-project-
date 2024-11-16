<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/service.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a service.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.UpdateServiceRequest</code>
 */
class UpdateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service = null;
    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;
    /**
     * If set to true, and if the Service does not exist, it will create a new
     * one. The caller must have 'run.services.create' permissions if this is set
     * to true and the Service does not exist.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     */
    private $allow_missing = false;

    /**
     * @param \Google\Cloud\Run\V2\Service $service Required. The Service to be updated.
     *
     * @return \Google\Cloud\Run\V2\UpdateServiceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Run\V2\Service $service): self
    {
        return (new self())
            ->setService($service);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Run\V2\Service $service
     *           Required. The Service to be updated.
     *     @type bool $validate_only
     *           Indicates that the request should be validated and default values
     *           populated, without persisting the request or updating any resources.
     *     @type bool $allow_missing
     *           If set to true, and if the Service does not exist, it will create a new
     *           one. The caller must have 'run.services.create' permissions if this is set
     *           to true and the Service does not exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Run\V2\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Required. The Service to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Run\V2\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Indicates that the request should be validated and default values
     * populated, without persisting the request or updating any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If set to true, and if the Service does not exist, it will create a new
     * one. The caller must have 'run.services.create' permissions if this is set
     * to true and the Service does not exist.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and if the Service does not exist, it will create a new
     * one. The caller must have 'run.services.create' permissions if this is set
     * to true and the Service does not exist.
     *
     * Generated from protobuf field <code>bool allow_missing = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

