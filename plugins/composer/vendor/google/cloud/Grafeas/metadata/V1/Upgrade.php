<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/upgrade.proto

namespace GPBMetadata\Grafeas\V1;

class Upgrade
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Grafeas\V1\Package::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/upgrade.proto
grafeas.v1grafeas/v1/package.proto"�
UpgradeNote
package (	$
version (2.grafeas.v1.Version6
distributions (2.grafeas.v1.UpgradeDistribution1
windows_update (2.grafeas.v1.WindowsUpdate"]
UpgradeDistribution
cpe_uri (	
classification (	
severity (	
cve (	"�
WindowsUpdate4
identity (2".grafeas.v1.WindowsUpdate.Identity
title (	
description (	6

categories (2".grafeas.v1.WindowsUpdate.Category
kb_article_ids (	
support_url (	<
last_published_timestamp (2.google.protobuf.Timestamp/
Identity
	update_id (	
revision (-
Category
category_id (	
name (	"�
UpgradeOccurrence
package (	+
parsed_version (2.grafeas.v1.Version5
distribution (2.grafeas.v1.UpgradeDistribution1
windows_update (2.grafeas.v1.WindowsUpdateBQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

