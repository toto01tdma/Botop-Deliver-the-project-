<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/build.proto

namespace GPBMetadata\Grafeas\V1;

class Build
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Grafeas\V1\IntotoProvenance::initOnce();
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        \GPBMetadata\Grafeas\V1\Provenance::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/build.proto
grafeas.v1!grafeas/v1/intoto_statement.protografeas/v1/provenance.proto"$
	BuildNote
builder_version (	"�
BuildOccurrence/

provenance (2.grafeas.v1.BuildProvenance
provenance_bytes (	7
intoto_provenance (2.grafeas.v1.InTotoProvenance5
intoto_statement (2.grafeas.v1.InTotoStatementBQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

