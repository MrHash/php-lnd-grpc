<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: invoices.proto

namespace Invoicesrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>invoicesrpc.AddHoldInvoiceRequest</code>
 */
class AddHoldInvoiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1;</code>
     */
    private $memo = '';
    /**
     * The hash of the preimage
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     */
    private $hash = '';
    /**
     *The value of this invoice in satoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value = 3;</code>
     */
    private $value = 0;
    /**
     *The value of this invoice in millisatoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value_msat = 10;</code>
     */
    private $value_msat = 0;
    /**
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 4;</code>
     */
    private $description_hash = '';
    /**
     * Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     */
    private $expiry = 0;
    /**
     * Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 6;</code>
     */
    private $fallback_addr = '';
    /**
     * Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 7;</code>
     */
    private $cltv_expiry = 0;
    /**
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 8;</code>
     */
    private $route_hints;
    /**
     * Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 9;</code>
     */
    private $private = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $memo
     *          An optional memo to attach along with the invoice. Used for record keeping
     *          purposes for the invoice's creator, and will also be set in the description
     *          field of the encoded payment request if the description_hash field is not
     *          being used.
     *     @type string $hash
     *           The hash of the preimage
     *     @type int|string $value
     *          The value of this invoice in satoshis
     *          The fields value and value_msat are mutually exclusive.
     *     @type int|string $value_msat
     *          The value of this invoice in millisatoshis
     *          The fields value and value_msat are mutually exclusive.
     *     @type string $description_hash
     *          Hash (SHA-256) of a description of the payment. Used if the description of
     *          payment (memo) is too long to naturally fit within the description field
     *          of an encoded payment request.
     *     @type int|string $expiry
     *           Payment request expiry time in seconds. Default is 3600 (1 hour).
     *     @type string $fallback_addr
     *           Fallback on-chain address.
     *     @type int|string $cltv_expiry
     *           Delta to use for the time-lock of the CLTV extended to the final hop.
     *     @type \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $route_hints
     *          Route hints that can each be individually used to assist in reaching the
     *          invoice's destination.
     *     @type bool $private
     *           Whether this invoice should include routing hints for private channels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoices::initOnce();
        parent::__construct($data);
    }

    /**
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1;</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

    /**
     * The hash of the preimage
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The hash of the preimage
     *
     * Generated from protobuf field <code>bytes hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     *The value of this invoice in satoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value = 3;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *The value of this invoice in satoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     *The value of this invoice in millisatoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value_msat = 10;</code>
     * @return int|string
     */
    public function getValueMsat()
    {
        return $this->value_msat;
    }

    /**
     *The value of this invoice in millisatoshis
     *The fields value and value_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 value_msat = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValueMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->value_msat = $var;

        return $this;
    }

    /**
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 4;</code>
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->description_hash = $var;

        return $this;
    }

    /**
     * Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 6;</code>
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallback_addr;
    }

    /**
     * Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFallbackAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->fallback_addr = $var;

        return $this;
    }

    /**
     * Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 7;</code>
     * @return int|string
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     * Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkUint64($var);
        $this->cltv_expiry = $var;

        return $this;
    }

    /**
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteHints()
    {
        return $this->route_hints;
    }

    /**
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 8;</code>
     * @param \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\RouteHint::class);
        $this->route_hints = $arr;

        return $this;
    }

    /**
     * Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 9;</code>
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->private = $var;

        return $this;
    }

}

