<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.Transaction</code>
 */
class Transaction extends \Google\Protobuf\Internal\Message
{
    /**
     *The raw serialized transaction.
     *
     * Generated from protobuf field <code>bytes tx_hex = 1;</code>
     */
    protected $tx_hex = '';
    /**
     *An optional label to save with the transaction. Limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tx_hex
     *          The raw serialized transaction.
     *     @type string $label
     *          An optional label to save with the transaction. Limited to 500 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The raw serialized transaction.
     *
     * Generated from protobuf field <code>bytes tx_hex = 1;</code>
     * @return string
     */
    public function getTxHex()
    {
        return $this->tx_hex;
    }

    /**
     *The raw serialized transaction.
     *
     * Generated from protobuf field <code>bytes tx_hex = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxHex($var)
    {
        GPBUtil::checkString($var, False);
        $this->tx_hex = $var;

        return $this;
    }

    /**
     *An optional label to save with the transaction. Limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     *An optional label to save with the transaction. Limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

}

