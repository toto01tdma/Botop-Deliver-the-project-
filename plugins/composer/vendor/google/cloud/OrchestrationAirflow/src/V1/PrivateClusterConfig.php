<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration options for the private GKE cluster in a Cloud Composer
 * environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.PrivateClusterConfig</code>
 */
class PrivateClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If `true`, access to the public endpoint of the GKE cluster is
     * denied.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_private_endpoint = false;
    /**
     * Optional. The CIDR block from which IPv4 range for GKE master will be
     * reserved. If left blank, the default value of '172.16.0.0/23' is used.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $master_ipv4_cidr_block = '';
    /**
     * Output only. The IP range in CIDR notation to use for the hosted master
     * network. This range is used for assigning internal IP addresses to the GKE
     * cluster master or set of masters and to the internal load balancer virtual
     * IP. This range must not overlap with any other ranges in use within the
     * cluster's network.
     *
     * Generated from protobuf field <code>string master_ipv4_reserved_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $master_ipv4_reserved_range = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_private_endpoint
     *           Optional. If `true`, access to the public endpoint of the GKE cluster is
     *           denied.
     *     @type string $master_ipv4_cidr_block
     *           Optional. The CIDR block from which IPv4 range for GKE master will be
     *           reserved. If left blank, the default value of '172.16.0.0/23' is used.
     *     @type string $master_ipv4_reserved_range
     *           Output only. The IP range in CIDR notation to use for the hosted master
     *           network. This range is used for assigning internal IP addresses to the GKE
     *           cluster master or set of masters and to the internal load balancer virtual
     *           IP. This range must not overlap with any other ranges in use within the
     *           cluster's network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If `true`, access to the public endpoint of the GKE cluster is
     * denied.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnablePrivateEndpoint()
    {
        return $this->enable_private_endpoint;
    }

    /**
     * Optional. If `true`, access to the public endpoint of the GKE cluster is
     * denied.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePrivateEndpoint($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_private_endpoint = $var;

        return $this;
    }

    /**
     * Optional. The CIDR block from which IPv4 range for GKE master will be
     * reserved. If left blank, the default value of '172.16.0.0/23' is used.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMasterIpv4CidrBlock()
    {
        return $this->master_ipv4_cidr_block;
    }

    /**
     * Optional. The CIDR block from which IPv4 range for GKE master will be
     * reserved. If left blank, the default value of '172.16.0.0/23' is used.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMasterIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * Output only. The IP range in CIDR notation to use for the hosted master
     * network. This range is used for assigning internal IP addresses to the GKE
     * cluster master or set of masters and to the internal load balancer virtual
     * IP. This range must not overlap with any other ranges in use within the
     * cluster's network.
     *
     * Generated from protobuf field <code>string master_ipv4_reserved_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMasterIpv4ReservedRange()
    {
        return $this->master_ipv4_reserved_range;
    }

    /**
     * Output only. The IP range in CIDR notation to use for the hosted master
     * network. This range is used for assigning internal IP addresses to the GKE
     * cluster master or set of masters and to the internal load balancer virtual
     * IP. This range must not overlap with any other ranges in use within the
     * cluster's network.
     *
     * Generated from protobuf field <code>string master_ipv4_reserved_range = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMasterIpv4ReservedRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_ipv4_reserved_range = $var;

        return $this;
    }

}
