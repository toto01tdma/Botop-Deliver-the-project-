<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the request passed to UpdateAgentPool.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.UpdateAgentPoolRequest</code>
 */
class UpdateAgentPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent pool to update. `agent_pool` is expected to specify following
     * fields:
     * *  [name][google.storagetransfer.v1.AgentPool.name]
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     * An `UpdateAgentPoolRequest` with any other fields is rejected
     * with the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool agent_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $agent_pool = null;
    /**
     * The [field mask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf)
     * of the fields in `agentPool` to update in this request.
     * The following `agentPool` fields can be updated:
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\StorageTransfer\V1\AgentPool $agentPool  Required. The agent pool to update. `agent_pool` is expected to specify following
     *                                                               fields:
     *
     *                                                               *  [name][google.storagetransfer.v1.AgentPool.name]
     *
     *                                                               *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     *
     *                                                               *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *                                                               An `UpdateAgentPoolRequest` with any other fields is rejected
     *                                                               with the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     * @param \Google\Protobuf\FieldMask                 $updateMask The [field mask]
     *                                                               (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf)
     *                                                               of the fields in `agentPool` to update in this request.
     *                                                               The following `agentPool` fields can be updated:
     *
     *                                                               *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     *
     *                                                               *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *
     * @return \Google\Cloud\StorageTransfer\V1\UpdateAgentPoolRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\StorageTransfer\V1\AgentPool $agentPool, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAgentPool($agentPool)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\StorageTransfer\V1\AgentPool $agent_pool
     *           Required. The agent pool to update. `agent_pool` is expected to specify following
     *           fields:
     *           *  [name][google.storagetransfer.v1.AgentPool.name]
     *           *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     *           *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *           An `UpdateAgentPoolRequest` with any other fields is rejected
     *           with the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The [field mask]
     *           (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf)
     *           of the fields in `agentPool` to update in this request.
     *           The following `agentPool` fields can be updated:
     *           *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     *           *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent pool to update. `agent_pool` is expected to specify following
     * fields:
     * *  [name][google.storagetransfer.v1.AgentPool.name]
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     * An `UpdateAgentPoolRequest` with any other fields is rejected
     * with the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool agent_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\StorageTransfer\V1\AgentPool|null
     */
    public function getAgentPool()
    {
        return $this->agent_pool;
    }

    public function hasAgentPool()
    {
        return isset($this->agent_pool);
    }

    public function clearAgentPool()
    {
        unset($this->agent_pool);
    }

    /**
     * Required. The agent pool to update. `agent_pool` is expected to specify following
     * fields:
     * *  [name][google.storagetransfer.v1.AgentPool.name]
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     * An `UpdateAgentPoolRequest` with any other fields is rejected
     * with the error [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool agent_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\StorageTransfer\V1\AgentPool $var
     * @return $this
     */
    public function setAgentPool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AgentPool::class);
        $this->agent_pool = $var;

        return $this;
    }

    /**
     * The [field mask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf)
     * of the fields in `agentPool` to update in this request.
     * The following `agentPool` fields can be updated:
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The [field mask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf)
     * of the fields in `agentPool` to update in this request.
     * The following `agentPool` fields can be updated:
     * *  [display_name][google.storagetransfer.v1.AgentPool.display_name]
     * *  [bandwidth_limit][google.storagetransfer.v1.AgentPool.bandwidth_limit]
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

