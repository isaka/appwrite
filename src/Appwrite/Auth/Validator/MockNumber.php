<?php

namespace Appwrite\Auth\Validator;

use Utopia\Validator;
use Utopia\Validator\Text;

/**
 * MockNumber.
 *
 * Validates if a given object represents a valid phone and OTP pair
 */
class MockNumber extends Validator
{
    private $message = '';

    /**
     * Get Description.
     *
     * Returns validator description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->message;
    }

    /**
     * Is valid.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value): bool
    {
        $phone = new Phone();
        if (!$phone->isValid($value['phone'])) {
            $this->message = $phone->getDescription();
            return false;
        }

        $otp = new Text(6, 6);
        if (!$otp->isValid($value['otp'])) {
            $this->message = $otp->getDescription();
            return false;
        }

        return true;
    }

    /**
     * Is array
     *
     * Function will return true if object is array.
     *
     * @return bool
     */
    public function isArray(): bool
    {
        return false;
    }

    /**
     * Get Type
     *
     * Returns validator type.
     *
     * @return string
     */
    public function getType(): string
    {
        return self::TYPE_STRING;
    }
}
