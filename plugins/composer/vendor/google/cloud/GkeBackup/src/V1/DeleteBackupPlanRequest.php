<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteBackupPlan.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.DeleteBackupPlanRequest</code>
 */
class DeleteBackupPlanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully qualified BackupPlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If provided, this value must match the current value of the
     * target BackupPlan's [etag][google.cloud.gkebackup.v1.BackupPlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    private $etag = '';

    /**
     * @param string $name Required. Fully qualified BackupPlan name.
     *                     Format: projects/&#42;/locations/&#42;/backupPlans/*
     *                     Please see {@see BackupForGKEClient::backupPlanName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeBackup\V1\DeleteBackupPlanRequest
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
     *           Required. Fully qualified BackupPlan name.
     *           Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;
     *     @type string $etag
     *           If provided, this value must match the current value of the
     *           target BackupPlan's [etag][google.cloud.gkebackup.v1.BackupPlan.etag] field or the request is
     *           rejected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully qualified BackupPlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Fully qualified BackupPlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;
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

    /**
     * If provided, this value must match the current value of the
     * target BackupPlan's [etag][google.cloud.gkebackup.v1.BackupPlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * If provided, this value must match the current value of the
     * target BackupPlan's [etag][google.cloud.gkebackup.v1.BackupPlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

