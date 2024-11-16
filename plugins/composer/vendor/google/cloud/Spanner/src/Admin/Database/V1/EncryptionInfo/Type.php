<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/common.proto

namespace Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo;

use UnexpectedValueException;

/**
 * Possible encryption types.
 *
 * Protobuf type <code>google.spanner.admin.database.v1.EncryptionInfo.Type</code>
 */
class Type
{
    /**
     * Encryption type was not specified, though data at rest remains encrypted.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * The data is encrypted at rest with a key that is
     * fully managed by Google. No key version or status will be populated.
     * This is the default state.
     *
     * Generated from protobuf enum <code>GOOGLE_DEFAULT_ENCRYPTION = 1;</code>
     */
    const GOOGLE_DEFAULT_ENCRYPTION = 1;
    /**
     * The data is encrypted at rest with a key that is
     * managed by the customer. The active version of the key. `kms_key_version`
     * will be populated, and `encryption_status` may be populated.
     *
     * Generated from protobuf enum <code>CUSTOMER_MANAGED_ENCRYPTION = 2;</code>
     */
    const CUSTOMER_MANAGED_ENCRYPTION = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::GOOGLE_DEFAULT_ENCRYPTION => 'GOOGLE_DEFAULT_ENCRYPTION',
        self::CUSTOMER_MANAGED_ENCRYPTION => 'CUSTOMER_MANAGED_ENCRYPTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo_Type::class);
