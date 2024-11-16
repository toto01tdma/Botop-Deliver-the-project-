<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_event.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class UserEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/discoveryengine/v1/user_event.protogoogle.cloud.discoveryengine.v1google/api/resource.proto,google/cloud/discoveryengine/v1/common.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
	UserEvent

event_type (	B�A
user_pseudo_id (	B�A.

event_time (2.google.protobuf.Timestamp<
	user_info (2).google.cloud.discoveryengine.v1.UserInfo
direct_user_request (

session_id (	<
	page_info (2).google.cloud.discoveryengine.v1.PageInfo
attribution_token (	
filter	 (	@
	documents
 (2-.google.cloud.discoveryengine.v1.DocumentInfo9
panel (2*.google.cloud.discoveryengine.v1.PanelInfo@
search_info (2+.google.cloud.discoveryengine.v1.SearchInfoH
completion_info (2/.google.cloud.discoveryengine.v1.CompletionInfoJ
transaction_info (20.google.cloud.discoveryengine.v1.TransactionInfo
tag_ids (	
promotion_ids (	N

attributes (2:.google.cloud.discoveryengine.v1.UserEvent.AttributesEntry>

media_info (2*.google.cloud.discoveryengine.v1.MediaInfoc
AttributesEntry
key (	?
value (20.google.cloud.discoveryengine.v1.CustomAttribute:8"Y
PageInfo
pageview_id (	
page_category (	
uri (	
referrer_uri (	"T

SearchInfo
search_query (	
order_by (	
offset (H �B	
_offset"H
CompletionInfo
selected_suggestion (	
selected_position ("�
TransactionInfo
value (B�AH �
currency (	B�A
transaction_id (	
tax (H�
cost (H�
discount_value (H�B
_valueB
_taxB
_costB
_discount_value"�
DocumentInfo
id (	B�AH ?
name (	B/�A�A)
\'discoveryengine.googleapis.com/DocumentH 
quantity (H�
promotion_ids (	B
document_descriptorB
	_quantity"�
	PanelInfo
panel_id (	B�A
display_name (	
panel_position (H �
total_panels (H�B
_panel_positionB
_total_panels"�
	MediaInfo:
media_progress_duration (2.google.protobuf.Duration&
media_progress_percentage (H �B
_media_progress_percentageB�
#com.google.cloud.discoveryengine.v1BUserEventProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

