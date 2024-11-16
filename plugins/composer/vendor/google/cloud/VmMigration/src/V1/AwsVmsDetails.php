<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AWSVmsDetails describes VMs in AWS.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.AwsVmsDetails</code>
 */
class AwsVmsDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The details of the AWS VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsVmDetails details = 1;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VMMigration\V1\AwsVmDetails>|\Google\Protobuf\Internal\RepeatedField $details
     *           The details of the AWS VMs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * The details of the AWS VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsVmDetails details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * The details of the AWS VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.AwsVmDetails details = 1;</code>
     * @param array<\Google\Cloud\VMMigration\V1\AwsVmDetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\AwsVmDetails::class);
        $this->details = $arr;

        return $this;
    }

}

