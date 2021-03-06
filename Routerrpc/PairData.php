<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.PairData</code>
 */
class PairData extends \Google\Protobuf\Internal\Message
{
    /**
     * Time of last failure.
     *
     * Generated from protobuf field <code>int64 fail_time = 1;</code>
     */
    protected $fail_time = 0;
    /**
     *Lowest amount that failed to forward rounded to whole sats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_sat = 2;</code>
     */
    protected $fail_amt_sat = 0;
    /**
     *Lowest amount that failed to forward in millisats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_msat = 4;</code>
     */
    protected $fail_amt_msat = 0;
    /**
     * Time of last success.
     *
     * Generated from protobuf field <code>int64 success_time = 5;</code>
     */
    protected $success_time = 0;
    /**
     * Highest amount that we could successfully forward rounded to whole sats.
     *
     * Generated from protobuf field <code>int64 success_amt_sat = 6;</code>
     */
    protected $success_amt_sat = 0;
    /**
     * Highest amount that we could successfully forward in millisats.
     *
     * Generated from protobuf field <code>int64 success_amt_msat = 7;</code>
     */
    protected $success_amt_msat = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fail_time
     *           Time of last failure.
     *     @type int|string $fail_amt_sat
     *          Lowest amount that failed to forward rounded to whole sats. This may be
     *          set to zero if the failure is independent of amount.
     *     @type int|string $fail_amt_msat
     *          Lowest amount that failed to forward in millisats. This may be
     *          set to zero if the failure is independent of amount.
     *     @type int|string $success_time
     *           Time of last success.
     *     @type int|string $success_amt_sat
     *           Highest amount that we could successfully forward rounded to whole sats.
     *     @type int|string $success_amt_msat
     *           Highest amount that we could successfully forward in millisats.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     * Time of last failure.
     *
     * Generated from protobuf field <code>int64 fail_time = 1;</code>
     * @return int|string
     */
    public function getFailTime()
    {
        return $this->fail_time;
    }

    /**
     * Time of last failure.
     *
     * Generated from protobuf field <code>int64 fail_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->fail_time = $var;

        return $this;
    }

    /**
     *Lowest amount that failed to forward rounded to whole sats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_sat = 2;</code>
     * @return int|string
     */
    public function getFailAmtSat()
    {
        return $this->fail_amt_sat;
    }

    /**
     *Lowest amount that failed to forward rounded to whole sats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_sat = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailAmtSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->fail_amt_sat = $var;

        return $this;
    }

    /**
     *Lowest amount that failed to forward in millisats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_msat = 4;</code>
     * @return int|string
     */
    public function getFailAmtMsat()
    {
        return $this->fail_amt_msat;
    }

    /**
     *Lowest amount that failed to forward in millisats. This may be
     *set to zero if the failure is independent of amount.
     *
     * Generated from protobuf field <code>int64 fail_amt_msat = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailAmtMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->fail_amt_msat = $var;

        return $this;
    }

    /**
     * Time of last success.
     *
     * Generated from protobuf field <code>int64 success_time = 5;</code>
     * @return int|string
     */
    public function getSuccessTime()
    {
        return $this->success_time;
    }

    /**
     * Time of last success.
     *
     * Generated from protobuf field <code>int64 success_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->success_time = $var;

        return $this;
    }

    /**
     * Highest amount that we could successfully forward rounded to whole sats.
     *
     * Generated from protobuf field <code>int64 success_amt_sat = 6;</code>
     * @return int|string
     */
    public function getSuccessAmtSat()
    {
        return $this->success_amt_sat;
    }

    /**
     * Highest amount that we could successfully forward rounded to whole sats.
     *
     * Generated from protobuf field <code>int64 success_amt_sat = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessAmtSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->success_amt_sat = $var;

        return $this;
    }

    /**
     * Highest amount that we could successfully forward in millisats.
     *
     * Generated from protobuf field <code>int64 success_amt_msat = 7;</code>
     * @return int|string
     */
    public function getSuccessAmtMsat()
    {
        return $this->success_amt_msat;
    }

    /**
     * Highest amount that we could successfully forward in millisats.
     *
     * Generated from protobuf field <code>int64 success_amt_msat = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessAmtMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->success_amt_msat = $var;

        return $this;
    }

}

