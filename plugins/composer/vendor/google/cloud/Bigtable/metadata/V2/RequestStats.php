<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/request_stats.proto

namespace GPBMetadata\Google\Bigtable\V2;

class RequestStats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/bigtable/v2/request_stats.protogoogle.bigtable.v2"�
ReadIterationStats
rows_seen_count (
rows_returned_count (
cells_seen_count (
cells_returned_count ("Q
RequestLatencyStats:
frontend_server_latency (2.google.protobuf.Duration"�
FullReadStatsViewD
read_iteration_stats (2&.google.bigtable.v2.ReadIterationStatsF
request_latency_stats (2\'.google.bigtable.v2.RequestLatencyStats"c
RequestStatsE
full_read_stats_view (2%.google.bigtable.v2.FullReadStatsViewH B

stats_viewB�
com.google.bigtable.v2BRequestStatsProtoPZ:google.golang.org/genproto/googleapis/bigtable/v2;bigtable�Google.Cloud.Bigtable.V2�Google\\Cloud\\Bigtable\\V2�Google::Cloud::Bigtable::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

