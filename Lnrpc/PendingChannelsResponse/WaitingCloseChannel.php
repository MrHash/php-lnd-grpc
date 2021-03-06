<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\PendingChannelsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse.WaitingCloseChannel</code>
 */
class WaitingCloseChannel extends \Google\Protobuf\Internal\Message
{
    /**
     * The pending channel waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     */
    protected $channel = null;
    /**
     * The balance in satoshis encumbered in this channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 2;</code>
     */
    protected $limbo_balance = 0;
    /**
     *A list of valid commitment transactions. Any of these can confirm at
     *this point.
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.Commitments commitments = 3;</code>
     */
    protected $commitments = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\PendingChannelsResponse\PendingChannel $channel
     *           The pending channel waiting for closing tx to confirm
     *     @type int|string $limbo_balance
     *           The balance in satoshis encumbered in this channel
     *     @type \Lnrpc\PendingChannelsResponse\Commitments $commitments
     *          A list of valid commitment transactions. Any of these can confirm at
     *          this point.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The pending channel waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     * @return \Lnrpc\PendingChannelsResponse\PendingChannel
     */
    public function getChannel()
    {
        return isset($this->channel) ? $this->channel : null;
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
     * The pending channel waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     * @param \Lnrpc\PendingChannelsResponse\PendingChannel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingChannelsResponse\PendingChannel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     * The balance in satoshis encumbered in this channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 2;</code>
     * @return int|string
     */
    public function getLimboBalance()
    {
        return $this->limbo_balance;
    }

    /**
     * The balance in satoshis encumbered in this channel
     *
     * Generated from protobuf field <code>int64 limbo_balance = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimboBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->limbo_balance = $var;

        return $this;
    }

    /**
     *A list of valid commitment transactions. Any of these can confirm at
     *this point.
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.Commitments commitments = 3;</code>
     * @return \Lnrpc\PendingChannelsResponse\Commitments
     */
    public function getCommitments()
    {
        return isset($this->commitments) ? $this->commitments : null;
    }

    public function hasCommitments()
    {
        return isset($this->commitments);
    }

    public function clearCommitments()
    {
        unset($this->commitments);
    }

    /**
     *A list of valid commitment transactions. Any of these can confirm at
     *this point.
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.Commitments commitments = 3;</code>
     * @param \Lnrpc\PendingChannelsResponse\Commitments $var
     * @return $this
     */
    public function setCommitments($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingChannelsResponse\Commitments::class);
        $this->commitments = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WaitingCloseChannel::class, \Lnrpc\PendingChannelsResponse_WaitingCloseChannel::class);

