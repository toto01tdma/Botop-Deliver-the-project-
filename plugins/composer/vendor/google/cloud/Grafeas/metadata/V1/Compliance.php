<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/compliance.proto

namespace GPBMetadata\Grafeas\V1;

class Compliance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Grafeas\V1\Severity::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/compliance.proto
grafeas.v1"�
ComplianceNote
title (	
description (	.
version (2.grafeas.v1.ComplianceVersion
	rationale (	
remediation (	@
cis_benchmark (2\'.grafeas.v1.ComplianceNote.CisBenchmarkH 
scan_instructions (M
CisBenchmark
profile_level (&
severity (2.grafeas.v1.SeverityB
compliance_type"Q
ComplianceVersion
cpe_uri (	
benchmark_document (	
version (	"p
ComplianceOccurrence9
non_compliant_files (2.grafeas.v1.NonCompliantFile
non_compliance_reason (	"I
NonCompliantFile
path (	
display_command (	
reason (	BQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

