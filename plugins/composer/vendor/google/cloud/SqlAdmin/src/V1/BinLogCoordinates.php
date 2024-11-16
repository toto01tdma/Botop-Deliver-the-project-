<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Binary log coordinates.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.BinLogCoordinates</code>
 */
class BinLogCoordinates extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the binary log file for a Cloud SQL instance.
     *
     * Generated from protobuf field <code>string bin_log_file_name = 1;</code>
     */
    private $bin_log_file_name = '';
    /**
     * Position (offset) within the binary log file.
     *
     * Generated from protobuf field <code>int64 bin_log_position = 2;</code>
     */
    private $bin_log_position = 0;
    /**
     * This is always **sql#binLogCoordinates**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    private $kind = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bin_log_file_name
     *           Name of the binary log file for a Cloud SQL instance.
     *     @type int|string $bin_log_position
     *           Position (offset) within the binary log file.
     *     @type string $kind
     *           This is always **sql#binLogCoordinates**.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the binary log file for a Cloud SQL instance.
     *
     * Generated from protobuf field <code>string bin_log_file_name = 1;</code>
     * @return string
     */
    public function getBinLogFileName()
    {
        return $this->bin_log_file_name;
    }

    /**
     * Name of the binary log file for a Cloud SQL instance.
     *
     * Generated from protobuf field <code>string bin_log_file_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBinLogFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bin_log_file_name = $var;

        return $this;
    }

    /**
     * Position (offset) within the binary log file.
     *
     * Generated from protobuf field <code>int64 bin_log_position = 2;</code>
     * @return int|string
     */
    public function getBinLogPosition()
    {
        return $this->bin_log_position;
    }

    /**
     * Position (offset) within the binary log file.
     *
     * Generated from protobuf field <code>int64 bin_log_position = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBinLogPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->bin_log_position = $var;

        return $this;
    }

    /**
     * This is always **sql#binLogCoordinates**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#binLogCoordinates**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

}

