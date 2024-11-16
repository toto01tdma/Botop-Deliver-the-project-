<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace GPBMetadata\Google\Analytics\Data\V1Beta;

class AnalyticsDataApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�2
5google/analytics/data/v1beta/analytics_data_api.protogoogle.analytics.data.v1betagoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CheckCompatibilityRequest
property (	;

dimensions (2\'.google.analytics.data.v1beta.Dimension5
metrics (2$.google.analytics.data.v1beta.MetricH
dimension_filter (2..google.analytics.data.v1beta.FilterExpressionE
metric_filter (2..google.analytics.data.v1beta.FilterExpressionI
compatibility_filter (2+.google.analytics.data.v1beta.Compatibility"�
CheckCompatibilityResponseW
dimension_compatibilities (24.google.analytics.data.v1beta.DimensionCompatibilityQ
metric_compatibilities (21.google.analytics.data.v1beta.MetricCompatibility"�
Metadata
name (	C

dimensions (2/.google.analytics.data.v1beta.DimensionMetadata=
metrics (2,.google.analytics.data.v1beta.MetricMetadata:J�AG
%analyticsdata.googleapis.com/Metadataproperties/{property}/metadata"�
RunReportRequest
property (	;

dimensions (2\'.google.analytics.data.v1beta.Dimension5
metrics (2$.google.analytics.data.v1beta.Metric<
date_ranges (2\'.google.analytics.data.v1beta.DateRangeH
dimension_filter (2..google.analytics.data.v1beta.FilterExpressionE
metric_filter (2..google.analytics.data.v1beta.FilterExpression
offset (
limit (L
metric_aggregations	 (2/.google.analytics.data.v1beta.MetricAggregation8
	order_bys
 (2%.google.analytics.data.v1beta.OrderBy
currency_code (	=
cohort_spec (2(.google.analytics.data.v1beta.CohortSpec
keep_empty_rows (
return_property_quota ("�
RunReportResponseH
dimension_headers (2-.google.analytics.data.v1beta.DimensionHeaderB
metric_headers (2*.google.analytics.data.v1beta.MetricHeader/
rows (2!.google.analytics.data.v1beta.Row1
totals (2!.google.analytics.data.v1beta.Row3
maximums (2!.google.analytics.data.v1beta.Row3
minimums (2!.google.analytics.data.v1beta.Row
	row_count (@
metadata (2..google.analytics.data.v1beta.ResponseMetaDataC
property_quota	 (2+.google.analytics.data.v1beta.PropertyQuota
kind
 (	"�
RunPivotReportRequest
property (	;

dimensions (2\'.google.analytics.data.v1beta.Dimension5
metrics (2$.google.analytics.data.v1beta.Metric<
date_ranges (2\'.google.analytics.data.v1beta.DateRange3
pivots (2#.google.analytics.data.v1beta.PivotH
dimension_filter (2..google.analytics.data.v1beta.FilterExpressionE
metric_filter (2..google.analytics.data.v1beta.FilterExpression
currency_code (	=
cohort_spec	 (2(.google.analytics.data.v1beta.CohortSpec
keep_empty_rows
 (
return_property_quota ("�
RunPivotReportResponse@
pivot_headers (2).google.analytics.data.v1beta.PivotHeaderH
dimension_headers (2-.google.analytics.data.v1beta.DimensionHeaderB
metric_headers (2*.google.analytics.data.v1beta.MetricHeader/
rows (2!.google.analytics.data.v1beta.Row5

aggregates (2!.google.analytics.data.v1beta.Row@
metadata (2..google.analytics.data.v1beta.ResponseMetaDataC
property_quota (2+.google.analytics.data.v1beta.PropertyQuota
kind (	"l
BatchRunReportsRequest
property (	@
requests (2..google.analytics.data.v1beta.RunReportRequest"i
BatchRunReportsResponse@
reports (2/.google.analytics.data.v1beta.RunReportResponse
kind (	"v
BatchRunPivotReportsRequest
property (	E
requests (23.google.analytics.data.v1beta.RunPivotReportRequest"y
BatchRunPivotReportsResponseK
pivot_reports (24.google.analytics.data.v1beta.RunPivotReportResponse
kind (	"Q
GetMetadataRequest;
name (	B-�A�A\'
%analyticsdata.googleapis.com/Metadata"�
RunRealtimeReportRequest
property (	;

dimensions (2\'.google.analytics.data.v1beta.Dimension5
metrics (2$.google.analytics.data.v1beta.MetricH
dimension_filter (2..google.analytics.data.v1beta.FilterExpressionE
metric_filter (2..google.analytics.data.v1beta.FilterExpression
limit (L
metric_aggregations (2/.google.analytics.data.v1beta.MetricAggregation8
	order_bys (2%.google.analytics.data.v1beta.OrderBy
return_property_quota	 (@
minute_ranges
 (2).google.analytics.data.v1beta.MinuteRange"�
RunRealtimeReportResponseH
dimension_headers (2-.google.analytics.data.v1beta.DimensionHeaderB
metric_headers (2*.google.analytics.data.v1beta.MetricHeader/
rows (2!.google.analytics.data.v1beta.Row1
totals (2!.google.analytics.data.v1beta.Row3
maximums (2!.google.analytics.data.v1beta.Row3
minimums (2!.google.analytics.data.v1beta.Row
	row_count (C
property_quota (2+.google.analytics.data.v1beta.PropertyQuota
kind	 (	2�
BetaAnalyticsData�
	RunReport..google.analytics.data.v1beta.RunReportRequest/.google.analytics.data.v1beta.RunReportResponse"4���.")/v1beta/{property=properties/*}:runReport:*�
RunPivotReport3.google.analytics.data.v1beta.RunPivotReportRequest4.google.analytics.data.v1beta.RunPivotReportResponse"9���3"./v1beta/{property=properties/*}:runPivotReport:*�
BatchRunReports4.google.analytics.data.v1beta.BatchRunReportsRequest5.google.analytics.data.v1beta.BatchRunReportsResponse":���4"//v1beta/{property=properties/*}:batchRunReports:*�
BatchRunPivotReports9.google.analytics.data.v1beta.BatchRunPivotReportsRequest:.google.analytics.data.v1beta.BatchRunPivotReportsResponse"?���9"4/v1beta/{property=properties/*}:batchRunPivotReports:*�
GetMetadata0.google.analytics.data.v1beta.GetMetadataRequest&.google.analytics.data.v1beta.Metadata"3���&$/v1beta/{name=properties/*/metadata}�Aname�
RunRealtimeReport6.google.analytics.data.v1beta.RunRealtimeReportRequest7.google.analytics.data.v1beta.RunRealtimeReportResponse"<���6"1/v1beta/{property=properties/*}:runRealtimeReport:*�
CheckCompatibility7.google.analytics.data.v1beta.CheckCompatibilityRequest8.google.analytics.data.v1beta.CheckCompatibilityResponse"=���7"2/v1beta/{property=properties/*}:checkCompatibility:*~�Aanalyticsdata.googleapis.com�A\\https://www.googleapis.com/auth/analytics,https://www.googleapis.com/auth/analytics.readonlyB}
 com.google.analytics.data.v1betaBAnalyticsDataApiProtoPZ@google.golang.org/genproto/googleapis/analytics/data/v1beta;databproto3'
        , true);

        static::$is_initialized = true;
    }
}

