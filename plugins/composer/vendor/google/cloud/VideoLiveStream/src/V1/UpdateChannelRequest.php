<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for "LivestreamService.UpdateChannel".
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.UpdateChannelRequest</code>
 */
class UpdateChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Field mask is used to specify the fields to be overwritten in the Channel
     * resource by the update. You can only update the following fields:
     * * [`inputAttachments`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputattachment)
     * * [`inputConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputconfig)
     * * [`output`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#output)
     * * [`elementaryStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#elementarystream)
     * * [`muxStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#muxstream)
     * * [`manifests`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#manifest)
     * * [`spriteSheets`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#spritesheet)
     * * [`logConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#logconfig)
     * * [`timecodeConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#timecodeconfig)
     * * [`encryptions`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#encryption)
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask.
     * If the mask is not present, then each field from the list above is updated
     * if the field appears in the request payload. To unset a field, add the
     * field to the update mask and remove it from the request payload.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     */
    private $update_mask = null;
    /**
     * Required. The channel resource to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel channel = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $channel = null;
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    private $request_id = '';

    /**
     * @param \Google\Cloud\Video\LiveStream\V1\Channel $channel    Required. The channel resource to be updated.
     * @param \Google\Protobuf\FieldMask                $updateMask Field mask is used to specify the fields to be overwritten in the Channel
     *                                                              resource by the update. You can only update the following fields:
     *
     *                                                              * [`inputAttachments`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputattachment)
     *                                                              * [`inputConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputconfig)
     *                                                              * [`output`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#output)
     *                                                              * [`elementaryStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#elementarystream)
     *                                                              * [`muxStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#muxstream)
     *                                                              * [`manifests`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#manifest)
     *                                                              * [`spriteSheets`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#spritesheet)
     *                                                              * [`logConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#logconfig)
     *                                                              * [`timecodeConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#timecodeconfig)
     *                                                              * [`encryptions`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#encryption)
     *
     *                                                              The fields specified in the update_mask are relative to the resource, not
     *                                                              the full request. A field will be overwritten if it is in the mask.
     *
     *                                                              If the mask is not present, then each field from the list above is updated
     *                                                              if the field appears in the request payload. To unset a field, add the
     *                                                              field to the update mask and remove it from the request payload.
     *
     * @return \Google\Cloud\Video\LiveStream\V1\UpdateChannelRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Video\LiveStream\V1\Channel $channel, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setChannel($channel)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields to be overwritten in the Channel
     *           resource by the update. You can only update the following fields:
     *           * [`inputAttachments`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputattachment)
     *           * [`inputConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputconfig)
     *           * [`output`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#output)
     *           * [`elementaryStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#elementarystream)
     *           * [`muxStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#muxstream)
     *           * [`manifests`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#manifest)
     *           * [`spriteSheets`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#spritesheet)
     *           * [`logConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#logconfig)
     *           * [`timecodeConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#timecodeconfig)
     *           * [`encryptions`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#encryption)
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask.
     *           If the mask is not present, then each field from the list above is updated
     *           if the field appears in the request payload. To unset a field, add the
     *           field to the update mask and remove it from the request payload.
     *     @type \Google\Cloud\Video\LiveStream\V1\Channel $channel
     *           Required. The channel resource to be updated.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported `(00000000-0000-0000-0000-000000000000)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the Channel
     * resource by the update. You can only update the following fields:
     * * [`inputAttachments`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputattachment)
     * * [`inputConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputconfig)
     * * [`output`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#output)
     * * [`elementaryStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#elementarystream)
     * * [`muxStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#muxstream)
     * * [`manifests`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#manifest)
     * * [`spriteSheets`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#spritesheet)
     * * [`logConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#logconfig)
     * * [`timecodeConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#timecodeconfig)
     * * [`encryptions`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#encryption)
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask.
     * If the mask is not present, then each field from the list above is updated
     * if the field appears in the request payload. To unset a field, add the
     * field to the update mask and remove it from the request payload.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the Channel
     * resource by the update. You can only update the following fields:
     * * [`inputAttachments`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputattachment)
     * * [`inputConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#inputconfig)
     * * [`output`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#output)
     * * [`elementaryStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#elementarystream)
     * * [`muxStreams`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#muxstream)
     * * [`manifests`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#manifest)
     * * [`spriteSheets`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#spritesheet)
     * * [`logConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#logconfig)
     * * [`timecodeConfig`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#timecodeconfig)
     * * [`encryptions`](https://cloud.google.com/livestream/docs/reference/rest/v1/projects.locations.channels#encryption)
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask.
     * If the mask is not present, then each field from the list above is updated
     * if the field appears in the request payload. To unset a field, add the
     * field to the update mask and remove it from the request payload.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The channel resource to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel channel = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\LiveStream\V1\Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * Required. The channel resource to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Channel channel = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\LiveStream\V1\Channel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\Channel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

