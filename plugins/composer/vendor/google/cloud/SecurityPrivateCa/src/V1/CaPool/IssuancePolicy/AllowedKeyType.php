<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a "type" of key that may be used in a
 * [Certificate][google.cloud.security.privateca.v1.Certificate] issued from
 * a [CaPool][google.cloud.security.privateca.v1.CaPool]. Note that a single
 * [AllowedKeyType][google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType]
 * may refer to either a fully-qualified key algorithm, such as RSA 4096, or
 * a family of key algorithms, such as any RSA key.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType</code>
 */
class AllowedKeyType extends \Google\Protobuf\Internal\Message
{
    protected $key_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\RsaKeyType $rsa
     *           Represents an allowed RSA key type.
     *     @type \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\EcKeyType $elliptic_curve
     *           Represents an allowed Elliptic Curve key type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents an allowed RSA key type.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.RsaKeyType rsa = 1;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\RsaKeyType|null
     */
    public function getRsa()
    {
        return $this->readOneof(1);
    }

    public function hasRsa()
    {
        return $this->hasOneof(1);
    }

    /**
     * Represents an allowed RSA key type.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.RsaKeyType rsa = 1;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\RsaKeyType $var
     * @return $this
     */
    public function setRsa($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\RsaKeyType::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Represents an allowed Elliptic Curve key type.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.EcKeyType elliptic_curve = 2;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\EcKeyType|null
     */
    public function getEllipticCurve()
    {
        return $this->readOneof(2);
    }

    public function hasEllipticCurve()
    {
        return $this->hasOneof(2);
    }

    /**
     * Represents an allowed Elliptic Curve key type.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.CaPool.IssuancePolicy.AllowedKeyType.EcKeyType elliptic_curve = 2;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\EcKeyType $var
     * @return $this
     */
    public function setEllipticCurve($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\CaPool\IssuancePolicy\AllowedKeyType\EcKeyType::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyType()
    {
        return $this->whichOneof("key_type");
    }

}


