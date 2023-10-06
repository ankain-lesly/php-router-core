<?php

/**
 * User: Dev_Lee
 * Date: 06/29/2023 - Time: 6:00 AM
 * Updated: 10/03/2023 - Time: 9:30 PM
 */


namespace Devlee\PHPRouter\Exceptions;

/**
 * @author  Ankain Lesly <leeleslyank@gmail.com>
 * @package  Devlee\PHPRouter\Exceptions\RouterException
 */

class RouterException extends BaseException
{
  public function __construct(string $message, int $code = 500)
  {
    parent::__construct($message, $code);

    HandleErrors::DisplayErrorMessage($this);
  }
}
