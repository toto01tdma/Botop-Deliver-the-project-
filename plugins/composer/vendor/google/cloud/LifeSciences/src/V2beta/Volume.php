<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Carries information about storage that can be attached to a VM.
 * Specify either [`Volume`][google.cloud.lifesciences.v2beta.Volume] or
 * [`Disk`][google.cloud.lifesciences.v2beta.Disk], but not both.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-supplied name for the volume. Used when mounting the volume into
     * [`Actions`][google.cloud.lifesciences.v2beta.Action]. The name must contain
     * only upper and lowercase alphanumeric characters and hyphens and cannot
     * start with a hyphen.
     *
     * Generated from protobuf field <code>string volume = 1;</code>
     */
    private $volume = '';
    protected $storage;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $volume
     *           A user-supplied name for the volume. Used when mounting the volume into
     *           [`Actions`][google.cloud.lifesciences.v2beta.Action]. The name must contain
     *           only upper and lowercase alphanumeric characters and hyphens and cannot
     *           start with a hyphen.
     *     @type \Google\Cloud\LifeSciences\V2beta\PersistentDisk $persistent_disk
     *           Configuration for a persistent disk.
     *     @type \Google\Cloud\LifeSciences\V2beta\ExistingDisk $existing_disk
     *           Configuration for a existing disk.
     *     @type \Google\Cloud\LifeSciences\V2beta\NFSMount $nfs_mount
     *           Configuration for an NFS mount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-supplied name for the volume. Used when mounting the volume into
     * [`Actions`][google.cloud.lifesciences.v2beta.Action]. The name must contain
     * only upper and lowercase alphanumeric characters and hyphens and cannot
     * start with a hyphen.
     *
     * Generated from protobuf field <code>string volume = 1;</code>
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * A user-supplied name for the volume. Used when mounting the volume into
     * [`Actions`][google.cloud.lifesciences.v2beta.Action]. The name must contain
     * only upper and lowercase alphanumeric characters and hyphens and cannot
     * start with a hyphen.
     *
     * Generated from protobuf field <code>string volume = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume = $var;

        return $this;
    }

    /**
     * Configuration for a persistent disk.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PersistentDisk persistent_disk = 2;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\PersistentDisk|null
     */
    public function getPersistentDisk()
    {
        return $this->readOneof(2);
    }

    public function hasPersistentDisk()
    {
        return $this->hasOneof(2);
    }

    /**
     * Configuration for a persistent disk.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.PersistentDisk persistent_disk = 2;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\PersistentDisk $var
     * @return $this
     */
    public function setPersistentDisk($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\PersistentDisk::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Configuration for a existing disk.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ExistingDisk existing_disk = 3;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\ExistingDisk|null
     */
    public function getExistingDisk()
    {
        return $this->readOneof(3);
    }

    public function hasExistingDisk()
    {
        return $this->hasOneof(3);
    }

    /**
     * Configuration for a existing disk.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.ExistingDisk existing_disk = 3;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\ExistingDisk $var
     * @return $this
     */
    public function setExistingDisk($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\ExistingDisk::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Configuration for an NFS mount.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.NFSMount nfs_mount = 4;</code>
     * @return \Google\Cloud\LifeSciences\V2beta\NFSMount|null
     */
    public function getNfsMount()
    {
        return $this->readOneof(4);
    }

    public function hasNfsMount()
    {
        return $this->hasOneof(4);
    }

    /**
     * Configuration for an NFS mount.
     *
     * Generated from protobuf field <code>.google.cloud.lifesciences.v2beta.NFSMount nfs_mount = 4;</code>
     * @param \Google\Cloud\LifeSciences\V2beta\NFSMount $var
     * @return $this
     */
    public function setNfsMount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\LifeSciences\V2beta\NFSMount::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->whichOneof("storage");
    }

}

