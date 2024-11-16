<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfilePubSubCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition consisting of a value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubCondition</code>
 */
class PubSubCondition extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $minimum_risk_score
     *           The minimum data risk score that triggers the condition.
     *     @type int $minimum_sensitivity_score
     *           The minimum sensitivity level that triggers the condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum data risk score that triggers the condition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.ProfileScoreBucket minimum_risk_score = 1;</code>
     * @return int
     */
    public function getMinimumRiskScore()
    {
        return $this->readOneof(1);
    }

    public function hasMinimumRiskScore()
    {
        return $this->hasOneof(1);
    }

    /**
     * The minimum data risk score that triggers the condition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.ProfileScoreBucket minimum_risk_score = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinimumRiskScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\ProfileScoreBucket::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The minimum sensitivity level that triggers the condition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.ProfileScoreBucket minimum_sensitivity_score = 2;</code>
     * @return int
     */
    public function getMinimumSensitivityScore()
    {
        return $this->readOneof(2);
    }

    public function hasMinimumSensitivityScore()
    {
        return $this->hasOneof(2);
    }

    /**
     * The minimum sensitivity level that triggers the condition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.ProfileScoreBucket minimum_sensitivity_score = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMinimumSensitivityScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\ProfileScoreBucket::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PubSubCondition::class, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition_PubSubCondition::class);

