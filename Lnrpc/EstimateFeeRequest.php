<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.EstimateFeeRequest</code>
 */
class EstimateFeeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The map from addresses to amounts for the transaction.
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     */
    private $AddrToAmount;
    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
     */
    protected $target_conf = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $AddrToAmount
     *           The map from addresses to amounts for the transaction.
     *     @type int $target_conf
     *           The target number of blocks that this transaction should be confirmed
     *           by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The map from addresses to amounts for the transaction.
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAddrToAmount()
    {
        return $this->AddrToAmount;
    }

    /**
     * The map from addresses to amounts for the transaction.
     *
     * Generated from protobuf field <code>map<string, int64> AddrToAmount = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAddrToAmount($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->AddrToAmount = $arr;

        return $this;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_conf = $var;

        return $this;
    }

}

