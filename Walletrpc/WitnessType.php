<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>walletrpc.WitnessType</code>
 */
class WitnessType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_WITNESS = 0;</code>
     */
    const UNKNOWN_WITNESS = 0;
    /**
     *A witness that allows us to spend the output of a commitment transaction
     *after a relative lock-time lockout.
     *
     * Generated from protobuf enum <code>COMMITMENT_TIME_LOCK = 1;</code>
     */
    const COMMITMENT_TIME_LOCK = 1;
    /**
     *A witness that allows us to spend a settled no-delay output immediately on a
     *counterparty's commitment transaction.
     *
     * Generated from protobuf enum <code>COMMITMENT_NO_DELAY = 2;</code>
     */
    const COMMITMENT_NO_DELAY = 2;
    /**
     *A witness that allows us to sweep the settled output of a malicious
     *counterparty's who broadcasts a revoked commitment transaction.
     *
     * Generated from protobuf enum <code>COMMITMENT_REVOKE = 3;</code>
     */
    const COMMITMENT_REVOKE = 3;
    /**
     *A witness that allows us to sweep an HTLC which we offered to the remote
     *party in the case that they broadcast a revoked commitment state.
     *
     * Generated from protobuf enum <code>HTLC_OFFERED_REVOKE = 4;</code>
     */
    const HTLC_OFFERED_REVOKE = 4;
    /**
     *A witness that allows us to sweep an HTLC output sent to us in the case that
     *the remote party broadcasts a revoked commitment state.
     *
     * Generated from protobuf enum <code>HTLC_ACCEPTED_REVOKE = 5;</code>
     */
    const HTLC_ACCEPTED_REVOKE = 5;
    /**
     *A witness that allows us to sweep an HTLC output that we extended to a
     *party, but was never fulfilled.  This HTLC output isn't directly on the
     *commitment transaction, but is the result of a confirmed second-level HTLC
     *transaction. As a result, we can only spend this after a CSV delay.
     *
     * Generated from protobuf enum <code>HTLC_OFFERED_TIMEOUT_SECOND_LEVEL = 6;</code>
     */
    const HTLC_OFFERED_TIMEOUT_SECOND_LEVEL = 6;
    /**
     *A witness that allows us to sweep an HTLC output that was offered to us, and
     *for which we have a payment preimage. This HTLC output isn't directly on our
     *commitment transaction, but is the result of confirmed second-level HTLC
     *transaction. As a result, we can only spend this after a CSV delay.
     *
     * Generated from protobuf enum <code>HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL = 7;</code>
     */
    const HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL = 7;
    /**
     *A witness that allows us to sweep an HTLC that we offered to the remote
     *party which lies in the commitment transaction of the remote party. We can
     *spend this output after the absolute CLTV timeout of the HTLC as passed.
     *
     * Generated from protobuf enum <code>HTLC_OFFERED_REMOTE_TIMEOUT = 8;</code>
     */
    const HTLC_OFFERED_REMOTE_TIMEOUT = 8;
    /**
     *A witness that allows us to sweep an HTLC that was offered to us by the
     *remote party. We use this witness in the case that the remote party goes to
     *chain, and we know the pre-image to the HTLC. We can sweep this without any
     *additional timeout.
     *
     * Generated from protobuf enum <code>HTLC_ACCEPTED_REMOTE_SUCCESS = 9;</code>
     */
    const HTLC_ACCEPTED_REMOTE_SUCCESS = 9;
    /**
     *A witness that allows us to sweep an HTLC from the remote party's commitment
     *transaction in the case that the broadcast a revoked commitment, but then
     *also immediately attempt to go to the second level to claim the HTLC.
     *
     * Generated from protobuf enum <code>HTLC_SECOND_LEVEL_REVOKE = 10;</code>
     */
    const HTLC_SECOND_LEVEL_REVOKE = 10;
    /**
     *A witness type that allows us to spend a regular p2wkh output that's sent to
     *an output which is under complete control of the backing wallet.
     *
     * Generated from protobuf enum <code>WITNESS_KEY_HASH = 11;</code>
     */
    const WITNESS_KEY_HASH = 11;
    /**
     *A witness type that allows us to sweep an output that sends to a nested P2SH
     *script that pays to a key solely under our control.
     *
     * Generated from protobuf enum <code>NESTED_WITNESS_KEY_HASH = 12;</code>
     */
    const NESTED_WITNESS_KEY_HASH = 12;
    /**
     *A witness type that allows us to spend our anchor on the commitment
     *transaction.
     *
     * Generated from protobuf enum <code>COMMITMENT_ANCHOR = 13;</code>
     */
    const COMMITMENT_ANCHOR = 13;

    private static $valueToName = [
        self::UNKNOWN_WITNESS => 'UNKNOWN_WITNESS',
        self::COMMITMENT_TIME_LOCK => 'COMMITMENT_TIME_LOCK',
        self::COMMITMENT_NO_DELAY => 'COMMITMENT_NO_DELAY',
        self::COMMITMENT_REVOKE => 'COMMITMENT_REVOKE',
        self::HTLC_OFFERED_REVOKE => 'HTLC_OFFERED_REVOKE',
        self::HTLC_ACCEPTED_REVOKE => 'HTLC_ACCEPTED_REVOKE',
        self::HTLC_OFFERED_TIMEOUT_SECOND_LEVEL => 'HTLC_OFFERED_TIMEOUT_SECOND_LEVEL',
        self::HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL => 'HTLC_ACCEPTED_SUCCESS_SECOND_LEVEL',
        self::HTLC_OFFERED_REMOTE_TIMEOUT => 'HTLC_OFFERED_REMOTE_TIMEOUT',
        self::HTLC_ACCEPTED_REMOTE_SUCCESS => 'HTLC_ACCEPTED_REMOTE_SUCCESS',
        self::HTLC_SECOND_LEVEL_REVOKE => 'HTLC_SECOND_LEVEL_REVOKE',
        self::WITNESS_KEY_HASH => 'WITNESS_KEY_HASH',
        self::NESTED_WITNESS_KEY_HASH => 'NESTED_WITNESS_KEY_HASH',
        self::COMMITMENT_ANCHOR => 'COMMITMENT_ANCHOR',
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

