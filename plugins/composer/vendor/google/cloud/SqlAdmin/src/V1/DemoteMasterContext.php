<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance demote primary instance context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.DemoteMasterContext</code>
 */
class DemoteMasterContext extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always **sql#demoteMasterContext**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Verify GTID consistency for demote operation. Default value:
     * **True**. Setting this flag to false enables you to bypass GTID consistency
     * check between on-premises primary instance and Cloud SQL instance during
     * the demotion operation but also exposes you to the risk of future
     * replication failures. Change the value only if you know the reason for the
     * GTID divergence and are confident that doing so will not cause any
     * replication issues.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_gtid_consistency = 2;</code>
     */
    private $verify_gtid_consistency = null;
    /**
     * The name of the instance which will act as on-premises primary instance
     * in the replication setup.
     *
     * Generated from protobuf field <code>string master_instance_name = 3;</code>
     */
    private $master_instance_name = '';
    /**
     * Configuration specific to read-replicas replicating from the on-premises
     * primary instance.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DemoteMasterConfiguration replica_configuration = 4;</code>
     */
    private $replica_configuration = null;
    /**
     * Flag to skip replication setup on the instance.
     *
     * Generated from protobuf field <code>bool skip_replication_setup = 5;</code>
     */
    private $skip_replication_setup = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always **sql#demoteMasterContext**.
     *     @type \Google\Protobuf\BoolValue $verify_gtid_consistency
     *           Verify GTID consistency for demote operation. Default value:
     *           **True**. Setting this flag to false enables you to bypass GTID consistency
     *           check between on-premises primary instance and Cloud SQL instance during
     *           the demotion operation but also exposes you to the risk of future
     *           replication failures. Change the value only if you know the reason for the
     *           GTID divergence and are confident that doing so will not cause any
     *           replication issues.
     *     @type string $master_instance_name
     *           The name of the instance which will act as on-premises primary instance
     *           in the replication setup.
     *     @type \Google\Cloud\Sql\V1\DemoteMasterConfiguration $replica_configuration
     *           Configuration specific to read-replicas replicating from the on-premises
     *           primary instance.
     *     @type bool $skip_replication_setup
     *           Flag to skip replication setup on the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always **sql#demoteMasterContext**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#demoteMasterContext**.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Verify GTID consistency for demote operation. Default value:
     * **True**. Setting this flag to false enables you to bypass GTID consistency
     * check between on-premises primary instance and Cloud SQL instance during
     * the demotion operation but also exposes you to the risk of future
     * replication failures. Change the value only if you know the reason for the
     * GTID divergence and are confident that doing so will not cause any
     * replication issues.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_gtid_consistency = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getVerifyGtidConsistency()
    {
        return $this->verify_gtid_consistency;
    }

    public function hasVerifyGtidConsistency()
    {
        return isset($this->verify_gtid_consistency);
    }

    public function clearVerifyGtidConsistency()
    {
        unset($this->verify_gtid_consistency);
    }

    /**
     * Returns the unboxed value from <code>getVerifyGtidConsistency()</code>

     * Verify GTID consistency for demote operation. Default value:
     * **True**. Setting this flag to false enables you to bypass GTID consistency
     * check between on-premises primary instance and Cloud SQL instance during
     * the demotion operation but also exposes you to the risk of future
     * replication failures. Change the value only if you know the reason for the
     * GTID divergence and are confident that doing so will not cause any
     * replication issues.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_gtid_consistency = 2;</code>
     * @return bool|null
     */
    public function getVerifyGtidConsistencyValue()
    {
        return $this->readWrapperValue("verify_gtid_consistency");
    }

    /**
     * Verify GTID consistency for demote operation. Default value:
     * **True**. Setting this flag to false enables you to bypass GTID consistency
     * check between on-premises primary instance and Cloud SQL instance during
     * the demotion operation but also exposes you to the risk of future
     * replication failures. Change the value only if you know the reason for the
     * GTID divergence and are confident that doing so will not cause any
     * replication issues.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_gtid_consistency = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setVerifyGtidConsistency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->verify_gtid_consistency = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Verify GTID consistency for demote operation. Default value:
     * **True**. Setting this flag to false enables you to bypass GTID consistency
     * check between on-premises primary instance and Cloud SQL instance during
     * the demotion operation but also exposes you to the risk of future
     * replication failures. Change the value only if you know the reason for the
     * GTID divergence and are confident that doing so will not cause any
     * replication issues.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue verify_gtid_consistency = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setVerifyGtidConsistencyValue($var)
    {
        $this->writeWrapperValue("verify_gtid_consistency", $var);
        return $this;}

    /**
     * The name of the instance which will act as on-premises primary instance
     * in the replication setup.
     *
     * Generated from protobuf field <code>string master_instance_name = 3;</code>
     * @return string
     */
    public function getMasterInstanceName()
    {
        return $this->master_instance_name;
    }

    /**
     * The name of the instance which will act as on-premises primary instance
     * in the replication setup.
     *
     * Generated from protobuf field <code>string master_instance_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMasterInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_instance_name = $var;

        return $this;
    }

    /**
     * Configuration specific to read-replicas replicating from the on-premises
     * primary instance.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DemoteMasterConfiguration replica_configuration = 4;</code>
     * @return \Google\Cloud\Sql\V1\DemoteMasterConfiguration|null
     */
    public function getReplicaConfiguration()
    {
        return $this->replica_configuration;
    }

    public function hasReplicaConfiguration()
    {
        return isset($this->replica_configuration);
    }

    public function clearReplicaConfiguration()
    {
        unset($this->replica_configuration);
    }

    /**
     * Configuration specific to read-replicas replicating from the on-premises
     * primary instance.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DemoteMasterConfiguration replica_configuration = 4;</code>
     * @param \Google\Cloud\Sql\V1\DemoteMasterConfiguration $var
     * @return $this
     */
    public function setReplicaConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\DemoteMasterConfiguration::class);
        $this->replica_configuration = $var;

        return $this;
    }

    /**
     * Flag to skip replication setup on the instance.
     *
     * Generated from protobuf field <code>bool skip_replication_setup = 5;</code>
     * @return bool
     */
    public function getSkipReplicationSetup()
    {
        return $this->skip_replication_setup;
    }

    /**
     * Flag to skip replication setup on the instance.
     *
     * Generated from protobuf field <code>bool skip_replication_setup = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipReplicationSetup($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_replication_setup = $var;

        return $this;
    }

}

