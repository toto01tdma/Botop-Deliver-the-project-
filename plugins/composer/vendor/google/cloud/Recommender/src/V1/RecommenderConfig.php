<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_config.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Recommender.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.RecommenderConfig</code>
 */
class RecommenderConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of recommender config.
     * Eg,
     * projects/[PROJECT_NUMBER]/locations/[LOCATION]/recommenders/[RECOMMENDER_ID]/config
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * RecommenderGenerationConfig which configures the Generation of
     * recommendations for this recommender.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommenderGenerationConfig recommender_generation_config = 2;</code>
     */
    private $recommender_generation_config = null;
    /**
     * Fingerprint of the RecommenderConfig. Provides optimistic locking when
     * updating.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     */
    private $etag = '';
    /**
     * Last time when the config was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     */
    private $update_time = null;
    /**
     * Output only. Immutable. The revision ID of the config.
     * A new revision is committed whenever the config is changed in any way.
     * The format is an 8-character hexadecimal string.
     *
     * Generated from protobuf field <code>string revision_id = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $revision_id = '';
    /**
     * Allows clients to store small amounts of arbitrary data. Annotations must
     * follow the Kubernetes syntax.
     * The total size of all keys and values combined is limited to 256k.
     * Key can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6;</code>
     */
    private $annotations;
    /**
     * A user-settable field to provide a human-readable name to be used in user
     * interfaces.
     *
     * Generated from protobuf field <code>string display_name = 7;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of recommender config.
     *           Eg,
     *           projects/[PROJECT_NUMBER]/locations/[LOCATION]/recommenders/[RECOMMENDER_ID]/config
     *     @type \Google\Cloud\Recommender\V1\RecommenderGenerationConfig $recommender_generation_config
     *           RecommenderGenerationConfig which configures the Generation of
     *           recommendations for this recommender.
     *     @type string $etag
     *           Fingerprint of the RecommenderConfig. Provides optimistic locking when
     *           updating.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Last time when the config was updated.
     *     @type string $revision_id
     *           Output only. Immutable. The revision ID of the config.
     *           A new revision is committed whenever the config is changed in any way.
     *           The format is an 8-character hexadecimal string.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Allows clients to store small amounts of arbitrary data. Annotations must
     *           follow the Kubernetes syntax.
     *           The total size of all keys and values combined is limited to 256k.
     *           Key can have 2 segments: prefix (optional) and name (required),
     *           separated by a slash (/).
     *           Prefix must be a DNS subdomain.
     *           Name must be 63 characters or less, begin and end with alphanumerics,
     *           with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *     @type string $display_name
     *           A user-settable field to provide a human-readable name to be used in user
     *           interfaces.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\RecommenderConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of recommender config.
     * Eg,
     * projects/[PROJECT_NUMBER]/locations/[LOCATION]/recommenders/[RECOMMENDER_ID]/config
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of recommender config.
     * Eg,
     * projects/[PROJECT_NUMBER]/locations/[LOCATION]/recommenders/[RECOMMENDER_ID]/config
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * RecommenderGenerationConfig which configures the Generation of
     * recommendations for this recommender.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommenderGenerationConfig recommender_generation_config = 2;</code>
     * @return \Google\Cloud\Recommender\V1\RecommenderGenerationConfig|null
     */
    public function getRecommenderGenerationConfig()
    {
        return $this->recommender_generation_config;
    }

    public function hasRecommenderGenerationConfig()
    {
        return isset($this->recommender_generation_config);
    }

    public function clearRecommenderGenerationConfig()
    {
        unset($this->recommender_generation_config);
    }

    /**
     * RecommenderGenerationConfig which configures the Generation of
     * recommendations for this recommender.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.RecommenderGenerationConfig recommender_generation_config = 2;</code>
     * @param \Google\Cloud\Recommender\V1\RecommenderGenerationConfig $var
     * @return $this
     */
    public function setRecommenderGenerationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\RecommenderGenerationConfig::class);
        $this->recommender_generation_config = $var;

        return $this;
    }

    /**
     * Fingerprint of the RecommenderConfig. Provides optimistic locking when
     * updating.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Fingerprint of the RecommenderConfig. Provides optimistic locking when
     * updating.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Last time when the config was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Last time when the config was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The revision ID of the config.
     * A new revision is committed whenever the config is changed in any way.
     * The format is an 8-character hexadecimal string.
     *
     * Generated from protobuf field <code>string revision_id = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Output only. Immutable. The revision ID of the config.
     * A new revision is committed whenever the config is changed in any way.
     * The format is an 8-character hexadecimal string.
     *
     * Generated from protobuf field <code>string revision_id = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

    /**
     * Allows clients to store small amounts of arbitrary data. Annotations must
     * follow the Kubernetes syntax.
     * The total size of all keys and values combined is limited to 256k.
     * Key can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Allows clients to store small amounts of arbitrary data. Annotations must
     * follow the Kubernetes syntax.
     * The total size of all keys and values combined is limited to 256k.
     * Key can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * A user-settable field to provide a human-readable name to be used in user
     * interfaces.
     *
     * Generated from protobuf field <code>string display_name = 7;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A user-settable field to provide a human-readable name to be used in user
     * interfaces.
     *
     * Generated from protobuf field <code>string display_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

