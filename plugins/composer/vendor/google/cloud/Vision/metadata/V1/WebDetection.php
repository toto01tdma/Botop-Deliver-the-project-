<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/web_detection.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class WebDetection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/vision/v1/web_detection.protogoogle.cloud.vision.v1"�
WebDetectionD
web_entities (2..google.cloud.vision.v1.WebDetection.WebEntityK
full_matching_images (2-.google.cloud.vision.v1.WebDetection.WebImageN
partial_matching_images (2-.google.cloud.vision.v1.WebDetection.WebImageP
pages_with_matching_images (2,.google.cloud.vision.v1.WebDetection.WebPageN
visually_similar_images (2-.google.cloud.vision.v1.WebDetection.WebImageH
best_guess_labels (2-.google.cloud.vision.v1.WebDetection.WebLabelB
	WebEntity
	entity_id (	
score (
description (	&
WebImage
url (	
score (�
WebPage
url (	
score (

page_title (	K
full_matching_images (2-.google.cloud.vision.v1.WebDetection.WebImageN
partial_matching_images (2-.google.cloud.vision.v1.WebDetection.WebImage0
WebLabel
label (	
language_code (	Br
com.google.cloud.vision.v1BWebDetectionProtoPZ5cloud.google.com/go/vision/v2/apiv1/visionpb;visionpb��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}

