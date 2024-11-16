<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete a `WorkerPool`.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.DeleteWorkerPoolRequest</code>
 */
class DeleteWorkerPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the `WorkerPool` to delete.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPool}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. If this is provided, it must match the server's etag on the
     * workerpool for the request to be processed.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    private $etag = '';
    /**
     * If set to true, and the `WorkerPool` is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;
    /**
     * If set, validate the request and preview the response, but do not actually
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the `WorkerPool` to delete.
     *           Format:
     *           `projects/{project}/locations/{location}/workerPools/{workerPool}`.
     *     @type string $etag
     *           Optional. If this is provided, it must match the server's etag on the
     *           workerpool for the request to be processed.
     *     @type bool $allow_missing
     *           If set to true, and the `WorkerPool` is not found, the request will succeed
     *           but no action will be taken on the server.
     *     @type bool $validate_only
     *           If set, validate the request and preview the response, but do not actually
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the `WorkerPool` to delete.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPool}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the `WorkerPool` to delete.
     * Format:
     * `projects/{project}/locations/{location}/workerPools/{workerPool}`.
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
     * Optional. If this is provided, it must match the server's etag on the
     * workerpool for the request to be processed.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. If this is provided, it must match the server's etag on the
     * workerpool for the request to be processed.
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

    /**
     * If set to true, and the `WorkerPool` is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the `WorkerPool` is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

    /**
     * If set, validate the request and preview the response, but do not actually
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, validate the request and preview the response, but do not actually
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

