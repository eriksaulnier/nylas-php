<?php namespace Nylas\Exceptions;

/**
 * ----------------------------------------------------------------------------------
 * Request Failed Or Payment Failed
 * ----------------------------------------------------------------------------------
 *
 * @author lanlin
 * @change 2018/11/21
 */
class RequestFailedException extends NylasException
{
    protected $code = 402;

    protected $message = 'Parameters were valid but the request failed. Or, a credit card must be added to your Organization.';
}