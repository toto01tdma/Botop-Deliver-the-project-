<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/slsa_provenance_zero_two.proto

namespace GPBMetadata\Grafeas\V1;

class SlsaProvenanceZeroTwo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)grafeas/v1/slsa_provenance_zero_two.proto
grafeas.v1google/protobuf/timestamp.proto"�	
SlsaProvenanceZeroTwo>
builder (2-.grafeas.v1.SlsaProvenanceZeroTwo.SlsaBuilder

build_type (	D

invocation (20.grafeas.v1.SlsaProvenanceZeroTwo.SlsaInvocation-
build_config (2.google.protobuf.Struct@
metadata (2..grafeas.v1.SlsaProvenanceZeroTwo.SlsaMetadataA
	materials (2..grafeas.v1.SlsaProvenanceZeroTwo.SlsaMaterial
SlsaBuilder

id (	�
SlsaMaterial
uri (	J
digest (2:.grafeas.v1.SlsaProvenanceZeroTwo.SlsaMaterial.DigestEntry-
DigestEntry
key (	
value (	:8�
SlsaInvocationI
config_source (22.grafeas.v1.SlsaProvenanceZeroTwo.SlsaConfigSource+

parameters (2.google.protobuf.Struct,
environment (2.google.protobuf.Struct�
SlsaConfigSource
uri (	N
digest (2>.grafeas.v1.SlsaProvenanceZeroTwo.SlsaConfigSource.DigestEntry
entry_point (	-
DigestEntry
key (	
value (	:8�
SlsaMetadata
build_invocation_id (	4
build_started_on (2.google.protobuf.Timestamp5
build_finished_on (2.google.protobuf.TimestampH
completeness (22.grafeas.v1.SlsaProvenanceZeroTwo.SlsaCompleteness
reproducible (N
SlsaCompleteness

parameters (
environment (
	materials (Bm
io.grafeas.v1BSlsaProvenanceZeroTwoProtoPZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

