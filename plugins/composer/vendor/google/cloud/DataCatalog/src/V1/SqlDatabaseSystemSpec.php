<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to
 * entries that are part `SQL_DATABASE` system
 * (user_specified_type)
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SqlDatabaseSystemSpec</code>
 */
class SqlDatabaseSystemSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * SQL Database Engine.
     * enum SqlEngine {
     *  UNDEFINED = 0;
     *  MY_SQL = 1;
     *  POSTGRE_SQL = 2;
     *  SQL_SERVER = 3;
     * }
     * Engine of the enclosing database instance.
     *
     * Generated from protobuf field <code>string sql_engine = 1;</code>
     */
    private $sql_engine = '';
    /**
     * Version of the database engine.
     *
     * Generated from protobuf field <code>string database_version = 2;</code>
     */
    private $database_version = '';
    /**
     * Host of the SQL database
     * enum InstanceHost {
     *  UNDEFINED = 0;
     *  SELF_HOSTED = 1;
     *  CLOUD_SQL = 2;
     *  AMAZON_RDS = 3;
     *  AZURE_SQL = 4;
     * }
     * Host of the enclousing database instance.
     *
     * Generated from protobuf field <code>string instance_host = 3;</code>
     */
    private $instance_host = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_engine
     *           SQL Database Engine.
     *           enum SqlEngine {
     *            UNDEFINED = 0;
     *            MY_SQL = 1;
     *            POSTGRE_SQL = 2;
     *            SQL_SERVER = 3;
     *           }
     *           Engine of the enclosing database instance.
     *     @type string $database_version
     *           Version of the database engine.
     *     @type string $instance_host
     *           Host of the SQL database
     *           enum InstanceHost {
     *            UNDEFINED = 0;
     *            SELF_HOSTED = 1;
     *            CLOUD_SQL = 2;
     *            AMAZON_RDS = 3;
     *            AZURE_SQL = 4;
     *           }
     *           Host of the enclousing database instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * SQL Database Engine.
     * enum SqlEngine {
     *  UNDEFINED = 0;
     *  MY_SQL = 1;
     *  POSTGRE_SQL = 2;
     *  SQL_SERVER = 3;
     * }
     * Engine of the enclosing database instance.
     *
     * Generated from protobuf field <code>string sql_engine = 1;</code>
     * @return string
     */
    public function getSqlEngine()
    {
        return $this->sql_engine;
    }

    /**
     * SQL Database Engine.
     * enum SqlEngine {
     *  UNDEFINED = 0;
     *  MY_SQL = 1;
     *  POSTGRE_SQL = 2;
     *  SQL_SERVER = 3;
     * }
     * Engine of the enclosing database instance.
     *
     * Generated from protobuf field <code>string sql_engine = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlEngine($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_engine = $var;

        return $this;
    }

    /**
     * Version of the database engine.
     *
     * Generated from protobuf field <code>string database_version = 2;</code>
     * @return string
     */
    public function getDatabaseVersion()
    {
        return $this->database_version;
    }

    /**
     * Version of the database engine.
     *
     * Generated from protobuf field <code>string database_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_version = $var;

        return $this;
    }

    /**
     * Host of the SQL database
     * enum InstanceHost {
     *  UNDEFINED = 0;
     *  SELF_HOSTED = 1;
     *  CLOUD_SQL = 2;
     *  AMAZON_RDS = 3;
     *  AZURE_SQL = 4;
     * }
     * Host of the enclousing database instance.
     *
     * Generated from protobuf field <code>string instance_host = 3;</code>
     * @return string
     */
    public function getInstanceHost()
    {
        return $this->instance_host;
    }

    /**
     * Host of the SQL database
     * enum InstanceHost {
     *  UNDEFINED = 0;
     *  SELF_HOSTED = 1;
     *  CLOUD_SQL = 2;
     *  AMAZON_RDS = 3;
     *  AZURE_SQL = 4;
     * }
     * Host of the enclousing database instance.
     *
     * Generated from protobuf field <code>string instance_host = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_host = $var;

        return $this;
    }

}

