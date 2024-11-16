<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace GPBMetadata\Google\Longrunning;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/longrunning/operations.protogoogle.longrunninggoogle/api/client.protogoogle/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/empty.protogoogle/rpc/status.proto google/protobuf/descriptor.proto"�
	Operation
name (	&
metadata (2.google.protobuf.Any
done (#
error (2.google.rpc.StatusH (
response (2.google.protobuf.AnyH B
result"#
GetOperationRequest
name (	"\\
ListOperationsRequest
name (	
filter (	
	page_size (

page_token (	"d
ListOperationsResponse1

operations (2.google.longrunning.Operation
next_page_token (	"&
CancelOperationRequest
name (	"&
DeleteOperationRequest
name (	"P
WaitOperationRequest
name (	*
timeout (2.google.protobuf.Duration"=
OperationInfo
response_type (	
metadata_type (	2�

Operations�
ListOperations).google.longrunning.ListOperationsRequest*.google.longrunning.ListOperationsResponse"+���/v1/{name=operations}�Aname,filter
GetOperation\'.google.longrunning.GetOperationRequest.google.longrunning.Operation"\'���/v1/{name=operations/**}�Aname~
DeleteOperation*.google.longrunning.DeleteOperationRequest.google.protobuf.Empty"\'���*/v1/{name=operations/**}�Aname�
CancelOperation*.google.longrunning.CancelOperationRequest.google.protobuf.Empty"1���$"/v1/{name=operations/**}:cancel:*�AnameZ
WaitOperation(.google.longrunning.WaitOperationRequest.google.longrunning.Operation" �Alongrunning.googleapis.comB�
com.google.longrunningBOperationsProtoPZCcloud.google.com/go/longrunning/autogen/longrunningpb;longrunningpb��Google.LongRunning�Google\\LongRunningbproto3'
        , true);

        static::$is_initialized = true;
    }
}

