<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace GPBMetadata\Google\Analytics\Data\V1Alpha;

class AnalyticsDataApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�,
6google/analytics/data/v1alpha/analytics_data_api.protogoogle.analytics.data.v1alphagoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Metadata
name (	D

dimensions (20.google.analytics.data.v1alpha.DimensionMetadata>
metrics (2-.google.analytics.data.v1alpha.MetricMetadata:J�AG
%analyticsdata.googleapis.com/Metadataproperties/{property}/metadata"�
RunReportRequest5
entity (2%.google.analytics.data.v1alpha.Entity<

dimensions (2(.google.analytics.data.v1alpha.Dimension6
metrics (2%.google.analytics.data.v1alpha.Metric=
date_ranges (2(.google.analytics.data.v1alpha.DateRange
offset (
limit (M
metric_aggregations (20.google.analytics.data.v1alpha.MetricAggregationI
dimension_filter (2/.google.analytics.data.v1alpha.FilterExpressionF
metric_filter	 (2/.google.analytics.data.v1alpha.FilterExpression9
	order_bys
 (2&.google.analytics.data.v1alpha.OrderBy
currency_code (	>
cohort_spec (2).google.analytics.data.v1alpha.CohortSpec
keep_empty_rows (
return_property_quota ("�
RunReportResponseI
dimension_headers (2..google.analytics.data.v1alpha.DimensionHeaderC
metric_headers (2+.google.analytics.data.v1alpha.MetricHeader0
rows (2".google.analytics.data.v1alpha.Row2
totals (2".google.analytics.data.v1alpha.Row4
maximums	 (2".google.analytics.data.v1alpha.Row4
minimums
 (2".google.analytics.data.v1alpha.Row
	row_count (A
metadata (2/.google.analytics.data.v1alpha.ResponseMetaDataD
property_quota (2,.google.analytics.data.v1alpha.PropertyQuota"�
RunPivotReportRequest5
entity (2%.google.analytics.data.v1alpha.Entity<

dimensions (2(.google.analytics.data.v1alpha.Dimension6
metrics (2%.google.analytics.data.v1alpha.MetricI
dimension_filter (2/.google.analytics.data.v1alpha.FilterExpressionF
metric_filter (2/.google.analytics.data.v1alpha.FilterExpression4
pivots (2$.google.analytics.data.v1alpha.Pivot=
date_ranges (2(.google.analytics.data.v1alpha.DateRange
currency_code (	>
cohort_spec	 (2).google.analytics.data.v1alpha.CohortSpec
keep_empty_rows
 (
return_property_quota ("�
RunPivotReportResponseA
pivot_headers (2*.google.analytics.data.v1alpha.PivotHeaderI
dimension_headers (2..google.analytics.data.v1alpha.DimensionHeaderC
metric_headers (2+.google.analytics.data.v1alpha.MetricHeader0
rows (2".google.analytics.data.v1alpha.Row6

aggregates (2".google.analytics.data.v1alpha.RowA
metadata (2/.google.analytics.data.v1alpha.ResponseMetaDataD
property_quota (2,.google.analytics.data.v1alpha.PropertyQuota"�
BatchRunReportsRequest5
entity (2%.google.analytics.data.v1alpha.EntityA
requests (2/.google.analytics.data.v1alpha.RunReportRequest"\\
BatchRunReportsResponseA
reports (20.google.analytics.data.v1alpha.RunReportResponse"�
BatchRunPivotReportsRequest5
entity (2%.google.analytics.data.v1alpha.EntityF
requests (24.google.analytics.data.v1alpha.RunPivotReportRequest"l
BatchRunPivotReportsResponseL
pivot_reports (25.google.analytics.data.v1alpha.RunPivotReportResponse"Q
GetMetadataRequest;
name (	B-�A�A\'
%analyticsdata.googleapis.com/Metadata"�
RunRealtimeReportRequest
property (	<

dimensions (2(.google.analytics.data.v1alpha.Dimension6
metrics (2%.google.analytics.data.v1alpha.Metric
limit (I
dimension_filter (2/.google.analytics.data.v1alpha.FilterExpressionF
metric_filter (2/.google.analytics.data.v1alpha.FilterExpressionM
metric_aggregations (20.google.analytics.data.v1alpha.MetricAggregation9
	order_bys (2&.google.analytics.data.v1alpha.OrderBy
return_property_quota	 ("�
RunRealtimeReportResponseI
dimension_headers (2..google.analytics.data.v1alpha.DimensionHeaderC
metric_headers (2+.google.analytics.data.v1alpha.MetricHeader0
rows (2".google.analytics.data.v1alpha.Row2
totals (2".google.analytics.data.v1alpha.Row4
maximums (2".google.analytics.data.v1alpha.Row4
minimums (2".google.analytics.data.v1alpha.Row
	row_count (D
property_quota (2,.google.analytics.data.v1alpha.PropertyQuota2�	
AlphaAnalyticsData�
	RunReport/.google.analytics.data.v1alpha.RunReportRequest0.google.analytics.data.v1alpha.RunReportResponse"���"/v1alpha:runReport:*�
RunPivotReport4.google.analytics.data.v1alpha.RunPivotReportRequest5.google.analytics.data.v1alpha.RunPivotReportResponse""���"/v1alpha:runPivotReport:*�
BatchRunReports5.google.analytics.data.v1alpha.BatchRunReportsRequest6.google.analytics.data.v1alpha.BatchRunReportsResponse"#���"/v1alpha:batchRunReports:*�
BatchRunPivotReports:.google.analytics.data.v1alpha.BatchRunPivotReportsRequest;.google.analytics.data.v1alpha.BatchRunPivotReportsResponse"(���""/v1alpha:batchRunPivotReports:*�
GetMetadata1.google.analytics.data.v1alpha.GetMetadataRequest\'.google.analytics.data.v1alpha.Metadata"4���\'%/v1alpha/{name=properties/*/metadata}�Aname�
RunRealtimeReport7.google.analytics.data.v1alpha.RunRealtimeReportRequest8.google.analytics.data.v1alpha.RunRealtimeReportResponse"=���7"2/v1alpha/{property=properties/*}:runRealtimeReport:*~�Aanalyticsdata.googleapis.com�A\\https://www.googleapis.com/auth/analytics,https://www.googleapis.com/auth/analytics.readonlyB
!com.google.analytics.data.v1alphaBAnalyticsDataApiProtoPZAgoogle.golang.org/genproto/googleapis/analytics/data/v1alpha;databproto3'
        , true);

        static::$is_initialized = true;
    }
}

