<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/geometry.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class Geometry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/vision/v1/geometry.protogoogle.cloud.vision.v1"
Vertex	
x (	
y ("(
NormalizedVertex	
x (	
y ("�
BoundingPoly0
vertices (2.google.cloud.vision.v1.VertexE
normalized_vertices (2(.google.cloud.vision.v1.NormalizedVertex"+
Position	
x (	
y (	
z (Bn
com.google.cloud.vision.v1BGeometryProtoPZ5cloud.google.com/go/vision/v2/apiv1/visionpb;visionpb��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}

