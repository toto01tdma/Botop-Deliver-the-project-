<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Beta;

class AnalyticsAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AccessReport::initOnce();
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
3google/analytics/admin/v1beta/analytics_admin.protogoogle.analytics.admin.v1beta-google/analytics/admin/v1beta/resources.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
RunAccessReportRequest
entity (	B

dimensions (2..google.analytics.admin.v1beta.AccessDimension<
metrics (2+.google.analytics.admin.v1beta.AccessMetricC
date_ranges (2..google.analytics.admin.v1beta.AccessDateRangeO
dimension_filter (25.google.analytics.admin.v1beta.AccessFilterExpressionL

offset (
limit (
	time_zone	 (	?
	order_bys
 (2,.google.analytics.admin.v1beta.AccessOrderBy
return_entity_quota ("�
RunAccessReportResponseO
dimension_headers (24.google.analytics.admin.v1beta.AccessDimensionHeaderI
metric_headers (21.google.analytics.admin.v1beta.AccessMetricHeader6
rows (2(.google.analytics.admin.v1beta.AccessRow
	row_count (9
quota (2*.google.analytics.admin.v1beta.AccessQuota"P
GetAccountRequest;
name (	B-�A�A\'
%analyticsadmin.googleapis.com/Account"R
ListAccountsRequest
	page_size (

page_token (	
show_deleted ("i
ListAccountsResponse8
accounts (2&.google.analytics.admin.v1beta.Account
next_page_token (	"S
DeleteAccountRequest;
name (	B-�A�A\'
%analyticsadmin.googleapis.com/Account"�
UpdateAccountRequest<
account (2&.google.analytics.admin.v1beta.AccountB�A4
update_mask (2.google.protobuf.FieldMaskB�A"n
ProvisionAccountTicketRequest7
account (2&.google.analytics.admin.v1beta.Account
redirect_uri (	";
ProvisionAccountTicketResponse
account_ticket_id (	"R
GetPropertyRequest<
name (	B.�A�A(
&analyticsadmin.googleapis.com/Property"i
ListPropertiesRequest
filter (	B�A
	page_size (

page_token (	
show_deleted ("n
ListPropertiesResponse;

properties (2\'.google.analytics.admin.v1beta.Property
next_page_token (	"�
UpdatePropertyRequest>
property (2\'.google.analytics.admin.v1beta.PropertyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"W
CreatePropertyRequest>
property (2\'.google.analytics.admin.v1beta.PropertyB�A"U
DeletePropertyRequest<
name (	B.�A�A(
&analyticsadmin.googleapis.com/Property"�
CreateFirebaseLinkRequestB
parent (	B2�A�A,*analyticsadmin.googleapis.com/FirebaseLinkG

DeleteFirebaseLinkRequest@
name (	B2�A�A,
*analyticsadmin.googleapis.com/FirebaseLink"�
ListFirebaseLinksRequestB
parent (	B2�A�A,*analyticsadmin.googleapis.com/FirebaseLink
	page_size (

page_token (	"y
ListFirebaseLinksResponseC
firebase_links (2+.google.analytics.admin.v1beta.FirebaseLink
next_page_token (	"�
CreateGoogleAdsLinkRequestC
parent (	B3�A�A-+analyticsadmin.googleapis.com/GoogleAdsLinkJ
google_ads_link (2,.google.analytics.admin.v1beta.GoogleAdsLinkB�A"�
UpdateGoogleAdsLinkRequestE
google_ads_link (2,.google.analytics.admin.v1beta.GoogleAdsLink4
update_mask (2.google.protobuf.FieldMaskB�A"_
DeleteGoogleAdsLinkRequestA
name (	B3�A�A-
+analyticsadmin.googleapis.com/GoogleAdsLink"�
ListGoogleAdsLinksRequestC
parent (	B3�A�A-+analyticsadmin.googleapis.com/GoogleAdsLink
	page_size (

page_token (	"}
ListGoogleAdsLinksResponseF
google_ads_links (2,.google.analytics.admin.v1beta.GoogleAdsLink
next_page_token (	"h
GetDataSharingSettingsRequestG
name (	B9�A�A3
1analyticsadmin.googleapis.com/DataSharingSettings"D
ListAccountSummariesRequest
	page_size (

page_token (	"�
ListAccountSummariesResponseH
account_summaries (2-.google.analytics.admin.v1beta.AccountSummary
next_page_token (	"�
$AcknowledgeUserDataCollectionRequest@
property (	B.�A�A(
&analyticsadmin.googleapis.com/Property
acknowledgement (	B�A"\'
%AcknowledgeUserDataCollectionResponse"�
 SearchChangeHistoryEventsRequest>
account (	B-�A�A\'
%analyticsadmin.googleapis.com/Account@
property (	B.�A�A(
&analyticsadmin.googleapis.com/PropertyT

action (2).google.analytics.admin.v1beta.ActionTypeB�A
actor_email (	B�A=
earliest_change_time (2.google.protobuf.TimestampB�A;
latest_change_time (2.google.protobuf.TimestampB�A
	page_size (B�A

page_token	 (	B�A"�
!SearchChangeHistoryEventsResponseP
change_history_events (21.google.analytics.admin.v1beta.ChangeHistoryEvent
next_page_token (	"t
#GetMeasurementProtocolSecretRequestM
name (	B?�A�A9
7analyticsadmin.googleapis.com/MeasurementProtocolSecret"�
&CreateMeasurementProtocolSecretRequestO
parent (	B?�A�A97analyticsadmin.googleapis.com/MeasurementProtocolSecretb
measurement_protocol_secret (28.google.analytics.admin.v1beta.MeasurementProtocolSecretB�A"w
&DeleteMeasurementProtocolSecretRequestM
name (	B?�A�A9
7analyticsadmin.googleapis.com/MeasurementProtocolSecret"�
&UpdateMeasurementProtocolSecretRequestb
measurement_protocol_secret (28.google.analytics.admin.v1beta.MeasurementProtocolSecretB�A/
update_mask (2.google.protobuf.FieldMask"�
%ListMeasurementProtocolSecretsRequestO
parent (	B?�A�A97analyticsadmin.googleapis.com/MeasurementProtocolSecret
	page_size (

page_token (	"�
&ListMeasurementProtocolSecretsResponse^
measurement_protocol_secrets (28.google.analytics.admin.v1beta.MeasurementProtocolSecret
next_page_token (	"�
CreateConversionEventRequestM
conversion_event (2..google.analytics.admin.v1beta.ConversionEventB�AE
parent (	B5�A�A/-analyticsadmin.googleapis.com/ConversionEvent"`
GetConversionEventRequestC
name (	B5�A�A/
-analyticsadmin.googleapis.com/ConversionEvent"c
DeleteConversionEventRequestC
name (	B5�A�A/
-analyticsadmin.googleapis.com/ConversionEvent"�
ListConversionEventsRequestE
parent (	B5�A�A/-analyticsadmin.googleapis.com/ConversionEvent
	page_size (

page_token (	"�
ListConversionEventsResponseI
conversion_events (2..google.analytics.admin.v1beta.ConversionEvent
next_page_token (	"�
CreateCustomDimensionRequestE
parent (	B5�A�A/-analyticsadmin.googleapis.com/CustomDimensionM
custom_dimension (2..google.analytics.admin.v1beta.CustomDimensionB�A"�
UpdateCustomDimensionRequestH
custom_dimension (2..google.analytics.admin.v1beta.CustomDimension4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListCustomDimensionsRequestE
parent (	B5�A�A/-analyticsadmin.googleapis.com/CustomDimension
	page_size (

page_token (	"�
ListCustomDimensionsResponseI
custom_dimensions (2..google.analytics.admin.v1beta.CustomDimension
next_page_token (	"d
ArchiveCustomDimensionRequestC
name (	B5�A�A/
-analyticsadmin.googleapis.com/CustomDimension"`
GetCustomDimensionRequestC
name (	B5�A�A/
-analyticsadmin.googleapis.com/CustomDimension"�
CreateCustomMetricRequestB
parent (	B2�A�A,*analyticsadmin.googleapis.com/CustomMetricG

UpdateCustomMetricRequestB

update_mask (2.google.protobuf.FieldMaskB�A"�
ListCustomMetricsRequestB
parent (	B2�A�A,*analyticsadmin.googleapis.com/CustomMetric
	page_size (

page_token (	"y
ListCustomMetricsResponseC
custom_metrics (2+.google.analytics.admin.v1beta.CustomMetric
next_page_token (	"^
ArchiveCustomMetricRequest@
name (	B2�A�A,
*analyticsadmin.googleapis.com/CustomMetric"Z
GetCustomMetricRequest@
name (	B2�A�A,
*analyticsadmin.googleapis.com/CustomMetric"l
GetDataRetentionSettingsRequestI
name (	B;�A�A5
3analyticsadmin.googleapis.com/DataRetentionSettings"�
"UpdateDataRetentionSettingsRequestZ
data_retention_settings (24.google.analytics.admin.v1beta.DataRetentionSettingsB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
CreateDataStreamRequest@
parent (	B0�A�A*(analyticsadmin.googleapis.com/DataStreamC
data_stream (2).google.analytics.admin.v1beta.DataStreamB�A"Y
DeleteDataStreamRequest>
name (	B0�A�A*
(analyticsadmin.googleapis.com/DataStream"�
UpdateDataStreamRequest>
data_stream (2).google.analytics.admin.v1beta.DataStream4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListDataStreamsRequest@
parent (	B0�A�A*(analyticsadmin.googleapis.com/DataStream
	page_size (

page_token (	"s
ListDataStreamsResponse?
data_streams (2).google.analytics.admin.v1beta.DataStream
next_page_token (	"V
GetDataStreamRequest>
name (	B0�A�A*
(analyticsadmin.googleapis.com/DataStream2�N
AnalyticsAdminService�

GetAccount0.google.analytics.admin.v1beta.GetAccountRequest&.google.analytics.admin.v1beta.Account"(���/v1beta/{name=accounts/*}�Aname�
ListAccounts2.google.analytics.admin.v1beta.ListAccountsRequest3.google.analytics.admin.v1beta.ListAccountsResponse"���/v1beta/accounts�


ProvisionAccountTicket<.google.analytics.admin.v1beta.ProvisionAccountTicketRequest=.google.analytics.admin.v1beta.ProvisionAccountTicketResponse"2���,"\'/v1beta/accounts:provisionAccountTicket:*�
ListAccountSummaries:.google.analytics.admin.v1beta.ListAccountSummariesRequest;.google.analytics.admin.v1beta.ListAccountSummariesResponse" ���/v1beta/accountSummaries�
GetProperty1.google.analytics.admin.v1beta.GetPropertyRequest\'.google.analytics.admin.v1beta.Property"*���/v1beta/{name=properties/*}�Aname�
ListProperties4.google.analytics.admin.v1beta.ListPropertiesRequest5.google.analytics.admin.v1beta.ListPropertiesResponse"���/v1beta/properties�
CreateProperty4.google.analytics.admin.v1beta.CreatePropertyRequest\'.google.analytics.admin.v1beta.Property"/���"/v1beta/properties:property�Aproperty�
DeleteProperty4.google.analytics.admin.v1beta.DeletePropertyRequest\'.google.analytics.admin.v1beta.Property"*���*/v1beta/{name=properties/*}�Aname�
UpdateProperty4.google.analytics.admin.v1beta.UpdatePropertyRequest\'.google.analytics.admin.v1beta.Property"M���02$/v1beta/{property.name=properties/*}:property�Aproperty,update_mask�
CreateFirebaseLink8.google.analytics.admin.v1beta.CreateFirebaseLinkRequest+.google.analytics.admin.v1beta.FirebaseLink"Y���<"+/v1beta/{parent=properties/*}/firebaseLinks:
DeleteFirebaseLink8.google.analytics.admin.v1beta.DeleteFirebaseLinkRequest.google.protobuf.Empty":���-*+/v1beta/{name=properties/*/firebaseLinks/*}�Aname�
ListFirebaseLinks7.google.analytics.admin.v1beta.ListFirebaseLinksRequest8.google.analytics.admin.v1beta.ListFirebaseLinksResponse"<���-+/v1beta/{parent=properties/*}/firebaseLinks�Aparent�
CreateGoogleAdsLink9.google.analytics.admin.v1beta.CreateGoogleAdsLinkRequest,.google.analytics.admin.v1beta.GoogleAdsLink"^���?",/v1beta/{parent=properties/*}/googleAdsLinks:google_ads_link�Aparent,google_ads_link�
UpdateGoogleAdsLink9.google.analytics.admin.v1beta.UpdateGoogleAdsLinkRequest,.google.analytics.admin.v1beta.GoogleAdsLink"s���O2</v1beta/{google_ads_link.name=properties/*/googleAdsLinks/*}:google_ads_link�Agoogle_ads_link,update_mask�
DeleteGoogleAdsLink9.google.analytics.admin.v1beta.DeleteGoogleAdsLinkRequest.google.protobuf.Empty";���.*,/v1beta/{name=properties/*/googleAdsLinks/*}�Aname�
ListGoogleAdsLinks8.google.analytics.admin.v1beta.ListGoogleAdsLinksRequest9.google.analytics.admin.v1beta.ListGoogleAdsLinksResponse"=���.,/v1beta/{parent=properties/*}/googleAdsLinks�Aparent�
GetDataSharingSettings<.google.analytics.admin.v1beta.GetDataSharingSettingsRequest2.google.analytics.admin.v1beta.DataSharingSettings"<���/-/v1beta/{name=accounts/*/dataSharingSettings}�Aname�
GetMeasurementProtocolSecretB.google.analytics.admin.v1beta.GetMeasurementProtocolSecretRequest8.google.analytics.admin.v1beta.MeasurementProtocolSecret"U���HF/v1beta/{name=properties/*/dataStreams/*/measurementProtocolSecrets/*}�Aname�
ListMeasurementProtocolSecretsD.google.analytics.admin.v1beta.ListMeasurementProtocolSecretsRequestE.google.analytics.admin.v1beta.ListMeasurementProtocolSecretsResponse"W���HF/v1beta/{parent=properties/*/dataStreams/*}/measurementProtocolSecrets�Aparent�
CreateMeasurementProtocolSecretE.google.analytics.admin.v1beta.CreateMeasurementProtocolSecretRequest8.google.analytics.admin.v1beta.MeasurementProtocolSecret"����e"F/v1beta/{parent=properties/*/dataStreams/*}/measurementProtocolSecrets:measurement_protocol_secret�A"parent,measurement_protocol_secret�
DeleteMeasurementProtocolSecretE.google.analytics.admin.v1beta.DeleteMeasurementProtocolSecretRequest.google.protobuf.Empty"U���H*F/v1beta/{name=properties/*/dataStreams/*/measurementProtocolSecrets/*}�Aname�
UpdateMeasurementProtocolSecretE.google.analytics.admin.v1beta.UpdateMeasurementProtocolSecretRequest8.google.analytics.admin.v1beta.MeasurementProtocolSecret"�����2b/v1beta/{measurement_protocol_secret.name=properties/*/dataStreams/*/measurementProtocolSecrets/*}:measurement_protocol_secret�A\'measurement_protocol_secret,update_mask�
AcknowledgeUserDataCollectionC.google.analytics.admin.v1beta.AcknowledgeUserDataCollectionRequestD.google.analytics.admin.v1beta.AcknowledgeUserDataCollectionResponse"H���B"=/v1beta/{property=properties/*}:acknowledgeUserDataCollection:*�
SearchChangeHistoryEvents?.google.analytics.admin.v1beta.SearchChangeHistoryEventsRequest@.google.analytics.admin.v1beta.SearchChangeHistoryEventsResponse"A���;"6/v1beta/{account=accounts/*}:searchChangeHistoryEvents:*�
CreateConversionEvent;.google.analytics.admin.v1beta.CreateConversionEventRequest..google.analytics.admin.v1beta.ConversionEvent"b���B"./v1beta/{parent=properties/*}/conversionEvents:conversion_event�Aparent,conversion_event�
GetConversionEvent8.google.analytics.admin.v1beta.GetConversionEventRequest..google.analytics.admin.v1beta.ConversionEvent"=���0./v1beta/{name=properties/*/conversionEvents/*}�Aname�
DeleteConversionEvent;.google.analytics.admin.v1beta.DeleteConversionEventRequest.google.protobuf.Empty"=���0*./v1beta/{name=properties/*/conversionEvents/*}�Aname�
ListConversionEvents:.google.analytics.admin.v1beta.ListConversionEventsRequest;.google.analytics.admin.v1beta.ListConversionEventsResponse"?���0./v1beta/{parent=properties/*}/conversionEvents�Aparent�
CreateCustomDimension;.google.analytics.admin.v1beta.CreateCustomDimensionRequest..google.analytics.admin.v1beta.CustomDimension"b���B"./v1beta/{parent=properties/*}/customDimensions:custom_dimension�Aparent,custom_dimension�
UpdateCustomDimension;.google.analytics.admin.v1beta.UpdateCustomDimensionRequest..google.analytics.admin.v1beta.CustomDimension"x���S2?/v1beta/{custom_dimension.name=properties/*/customDimensions/*}:custom_dimension�Acustom_dimension,update_mask�
ListCustomDimensions:.google.analytics.admin.v1beta.ListCustomDimensionsRequest;.google.analytics.admin.v1beta.ListCustomDimensionsResponse"?���0./v1beta/{parent=properties/*}/customDimensions�Aparent�
ArchiveCustomDimension<.google.analytics.admin.v1beta.ArchiveCustomDimensionRequest.google.protobuf.Empty"H���;"6/v1beta/{name=properties/*/customDimensions/*}:archive:*�Aname�
GetCustomDimension8.google.analytics.admin.v1beta.GetCustomDimensionRequest..google.analytics.admin.v1beta.CustomDimension"=���0./v1beta/{name=properties/*/customDimensions/*}�Aname�
CreateCustomMetric8.google.analytics.admin.v1beta.CreateCustomMetricRequest+.google.analytics.admin.v1beta.CustomMetric"Y���<"+/v1beta/{parent=properties/*}/customMetrics:
UpdateCustomMetric8.google.analytics.admin.v1beta.UpdateCustomMetricRequest+.google.analytics.admin.v1beta.CustomMetric"l���J29/v1beta/{custom_metric.name=properties/*/customMetrics/*}:
ListCustomMetrics7.google.analytics.admin.v1beta.ListCustomMetricsRequest8.google.analytics.admin.v1beta.ListCustomMetricsResponse"<���-+/v1beta/{parent=properties/*}/customMetrics�Aparent�
ArchiveCustomMetric9.google.analytics.admin.v1beta.ArchiveCustomMetricRequest.google.protobuf.Empty"E���8"3/v1beta/{name=properties/*/customMetrics/*}:archive:*�Aname�
GetCustomMetric5.google.analytics.admin.v1beta.GetCustomMetricRequest+.google.analytics.admin.v1beta.CustomMetric":���-+/v1beta/{name=properties/*/customMetrics/*}�Aname�
GetDataRetentionSettings>.google.analytics.admin.v1beta.GetDataRetentionSettingsRequest4.google.analytics.admin.v1beta.DataRetentionSettings"@���31/v1beta/{name=properties/*/dataRetentionSettings}�Aname�
UpdateDataRetentionSettingsA.google.analytics.admin.v1beta.UpdateDataRetentionSettingsRequest4.google.analytics.admin.v1beta.DataRetentionSettings"����d2I/v1beta/{data_retention_settings.name=properties/*/dataRetentionSettings}:data_retention_settings�A#data_retention_settings,update_mask�
CreateDataStream6.google.analytics.admin.v1beta.CreateDataStreamRequest).google.analytics.admin.v1beta.DataStream"S���8")/v1beta/{parent=properties/*}/dataStreams:data_stream�Aparent,data_stream�
DeleteDataStream6.google.analytics.admin.v1beta.DeleteDataStreamRequest.google.protobuf.Empty"8���+*)/v1beta/{name=properties/*/dataStreams/*}�Aname�
UpdateDataStream6.google.analytics.admin.v1beta.UpdateDataStreamRequest).google.analytics.admin.v1beta.DataStream"d���D25/v1beta/{data_stream.name=properties/*/dataStreams/*}:data_stream�Adata_stream,update_mask�
ListDataStreams5.google.analytics.admin.v1beta.ListDataStreamsRequest6.google.analytics.admin.v1beta.ListDataStreamsResponse":���+)/v1beta/{parent=properties/*}/dataStreams�Aparent�

RunAccessReport5.google.analytics.admin.v1beta.RunAccessReportRequest6.google.analytics.admin.v1beta.RunAccessReportResponse"j���d"-/v1beta/{entity=properties/*}:runAccessReport:*Z0"+/v1beta/{entity=accounts/*}:runAccessReport:*��Aanalyticsadmin.googleapis.com�Aahttps://www.googleapis.com/auth/analytics.edit,https://www.googleapis.com/auth/analytics.readonlyB~
!com.google.analytics.admin.v1betaBAnalyticsAdminProtoPZBgoogle.golang.org/genproto/googleapis/analytics/admin/v1beta;adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}
