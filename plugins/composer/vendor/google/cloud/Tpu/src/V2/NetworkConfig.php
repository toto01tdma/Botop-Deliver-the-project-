<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Network related configurations.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the network for the TPU node. It must be a preexisting Google
     * Compute Engine network. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     */
    private $network = '';
    /**
     * The name of the subnetwork for the TPU node. It must be a preexisting
     * Google Compute Engine subnetwork. If none is provided, "default" will be
     * used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     */
    private $subnetwork = '';
    /**
     * Indicates that external IP addresses would be associated with the TPU
     * workers. If set to false, the specified subnetwork or network should have
     * Private Google Access enabled.
     *
     * Generated from protobuf field <code>bool enable_external_ips = 3;</code>
     */
    private $enable_external_ips = false;
    /**
     * Allows the TPU node to send and receive packets with non-matching
     * destination or source IPs. This is required if you plan to use the TPU
     * workers to forward routes.
     *
     * Generated from protobuf field <code>bool can_ip_forward = 4;</code>
     */
    private $can_ip_forward = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           The name of the network for the TPU node. It must be a preexisting Google
     *           Compute Engine network. If none is provided, "default" will be used.
     *     @type string $subnetwork
     *           The name of the subnetwork for the TPU node. It must be a preexisting
     *           Google Compute Engine subnetwork. If none is provided, "default" will be
     *           used.
     *     @type bool $enable_external_ips
     *           Indicates that external IP addresses would be associated with the TPU
     *           workers. If set to false, the specified subnetwork or network should have
     *           Private Google Access enabled.
     *     @type bool $can_ip_forward
     *           Allows the TPU node to send and receive packets with non-matching
     *           destination or source IPs. This is required if you plan to use the TPU
     *           workers to forward routes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the network for the TPU node. It must be a preexisting Google
     * Compute Engine network. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The name of the network for the TPU node. It must be a preexisting Google
     * Compute Engine network. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The name of the subnetwork for the TPU node. It must be a preexisting
     * Google Compute Engine subnetwork. If none is provided, "default" will be
     * used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * The name of the subnetwork for the TPU node. It must be a preexisting
     * Google Compute Engine subnetwork. If none is provided, "default" will be
     * used.
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Indicates that external IP addresses would be associated with the TPU
     * workers. If set to false, the specified subnetwork or network should have
     * Private Google Access enabled.
     *
     * Generated from protobuf field <code>bool enable_external_ips = 3;</code>
     * @return bool
     */
    public function getEnableExternalIps()
    {
        return $this->enable_external_ips;
    }

    /**
     * Indicates that external IP addresses would be associated with the TPU
     * workers. If set to false, the specified subnetwork or network should have
     * Private Google Access enabled.
     *
     * Generated from protobuf field <code>bool enable_external_ips = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableExternalIps($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_external_ips = $var;

        return $this;
    }

    /**
     * Allows the TPU node to send and receive packets with non-matching
     * destination or source IPs. This is required if you plan to use the TPU
     * workers to forward routes.
     *
     * Generated from protobuf field <code>bool can_ip_forward = 4;</code>
     * @return bool
     */
    public function getCanIpForward()
    {
        return $this->can_ip_forward;
    }

    /**
     * Allows the TPU node to send and receive packets with non-matching
     * destination or source IPs. This is required if you plan to use the TPU
     * workers to forward routes.
     *
     * Generated from protobuf field <code>bool can_ip_forward = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanIpForward($var)
    {
        GPBUtil::checkBool($var);
        $this->can_ip_forward = $var;

        return $this;
    }

}
