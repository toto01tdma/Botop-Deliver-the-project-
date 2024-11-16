<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/queue.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

class Queue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/tasks/v2beta3/queue.protogoogle.cloud.tasks.v2beta3google/api/resource.proto\'google/cloud/tasks/v2beta3/target.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
Queue
name (	O
app_engine_http_queue (2..google.cloud.tasks.v2beta3.AppEngineHttpQueueH ;
rate_limits (2&.google.cloud.tasks.v2beta3.RateLimits=
retry_config (2\'.google.cloud.tasks.v2beta3.RetryConfig6
state (2\'.google.cloud.tasks.v2beta3.Queue.State.

purge_time (2.google.protobuf.Timestamp+
task_ttl (2.google.protobuf.Duration0
tombstone_ttl	 (2.google.protobuf.DurationX
stackdriver_logging_config
 (24.google.cloud.tasks.v2beta3.StackdriverLoggingConfig9
type (2&.google.cloud.tasks.v2beta3.Queue.TypeB�A:
stats (2&.google.cloud.tasks.v2beta3.QueueStatsB�A"E
State
STATE_UNSPECIFIED 
RUNNING

PAUSED
DISABLED"0
Type
TYPE_UNSPECIFIED 
PULL
PUSH:\\�AY
cloudtasks.googleapis.com/Queue6projects/{project}/locations/{location}/queues/{queue}B

queue_type"j

RateLimits!
max_dispatches_per_second (
max_burst_size (!
max_concurrent_dispatches ("�
RetryConfig
max_attempts (5
max_retry_duration (2.google.protobuf.Duration.
min_backoff (2.google.protobuf.Duration.
max_backoff (2.google.protobuf.Duration
max_doublings ("2
StackdriverLoggingConfig
sampling_ratio ("�

QueueStats
tasks_count (B�AF
oldest_estimated_arrival_time (2.google.protobuf.TimestampB�A\'
executed_last_minute_count (B�A(
concurrent_dispatches_count (B�A%
effective_execution_rate (B�ABs
com.google.cloud.tasks.v2beta3B
QueueProtoPZCcloud.google.com/go/cloudtasks/apiv2beta3/cloudtaskspb;cloudtaskspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

