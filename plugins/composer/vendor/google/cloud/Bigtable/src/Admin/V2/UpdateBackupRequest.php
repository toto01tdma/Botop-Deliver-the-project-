<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [UpdateBackup][google.bigtable.admin.v2.BigtableTableAdmin.UpdateBackup].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.UpdateBackupRequest</code>
 */
class UpdateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The backup to update. `backup.name`, and the fields to be updated
     * as specified by `update_mask` are required. Other fields are ignored.
     * Update is only supported for the following fields:
     *  * `backup.expire_time`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backup = null;
    /**
     * Required. A mask specifying which fields (e.g. `expire_time`) in the
     * Backup resource should be updated. This mask is relative to the Backup
     * resource, not to the request message. The field mask must always be
     * specified; this prevents any future fields from being erased accidentally
     * by clients that do not know about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Bigtable\Admin\V2\Backup $backup     Required. The backup to update. `backup.name`, and the fields to be updated
     *                                                           as specified by `update_mask` are required. Other fields are ignored.
     *                                                           Update is only supported for the following fields:
     *                                                           * `backup.expire_time`.
     * @param \Google\Protobuf\FieldMask             $updateMask Required. A mask specifying which fields (e.g. `expire_time`) in the
     *                                                           Backup resource should be updated. This mask is relative to the Backup
     *                                                           resource, not to the request message. The field mask must always be
     *                                                           specified; this prevents any future fields from being erased accidentally
     *                                                           by clients that do not know about them.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\UpdateBackupRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Bigtable\Admin\V2\Backup $backup, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setBackup($backup)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\Admin\V2\Backup $backup
     *           Required. The backup to update. `backup.name`, and the fields to be updated
     *           as specified by `update_mask` are required. Other fields are ignored.
     *           Update is only supported for the following fields:
     *            * `backup.expire_time`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A mask specifying which fields (e.g. `expire_time`) in the
     *           Backup resource should be updated. This mask is relative to the Backup
     *           resource, not to the request message. The field mask must always be
     *           specified; this prevents any future fields from being erased accidentally
     *           by clients that do not know about them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The backup to update. `backup.name`, and the fields to be updated
     * as specified by `update_mask` are required. Other fields are ignored.
     * Update is only supported for the following fields:
     *  * `backup.expire_time`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. The backup to update. `backup.name`, and the fields to be updated
     * as specified by `update_mask` are required. Other fields are ignored.
     * Update is only supported for the following fields:
     *  * `backup.expire_time`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Backup backup = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Backup::class);
        $this->backup = $var;

        return $this;
    }

    /**
     * Required. A mask specifying which fields (e.g. `expire_time`) in the
     * Backup resource should be updated. This mask is relative to the Backup
     * resource, not to the request message. The field mask must always be
     * specified; this prevents any future fields from being erased accidentally
     * by clients that do not know about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. A mask specifying which fields (e.g. `expire_time`) in the
     * Backup resource should be updated. This mask is relative to the Backup
     * resource, not to the request message. The field mask must always be
     * specified; this prevents any future fields from being erased accidentally
     * by clients that do not know about them.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

