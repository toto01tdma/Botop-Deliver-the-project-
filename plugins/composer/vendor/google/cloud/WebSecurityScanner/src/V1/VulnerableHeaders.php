<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/finding_addon.proto

namespace Google\Cloud\WebSecurityScanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about vulnerable or missing HTTP Headers.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.VulnerableHeaders</code>
 */
class VulnerableHeaders extends \Google\Protobuf\Internal\Message
{
    /**
     * List of vulnerable headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header headers = 1;</code>
     */
    private $headers;
    /**
     * List of missing headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header missing_headers = 2;</code>
     */
    private $missing_headers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header>|\Google\Protobuf\Internal\RepeatedField $headers
     *           List of vulnerable headers.
     *     @type array<\Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header>|\Google\Protobuf\Internal\RepeatedField $missing_headers
     *           List of missing headers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\FindingAddon::initOnce();
        parent::__construct($data);
    }

    /**
     * List of vulnerable headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header headers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * List of vulnerable headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header headers = 1;</code>
     * @param array<\Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * List of missing headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header missing_headers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissingHeaders()
    {
        return $this->missing_headers;
    }

    /**
     * List of missing headers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1.VulnerableHeaders.Header missing_headers = 2;</code>
     * @param array<\Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissingHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebSecurityScanner\V1\VulnerableHeaders\Header::class);
        $this->missing_headers = $arr;

        return $this;
    }

}

