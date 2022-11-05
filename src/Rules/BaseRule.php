<?php

namespace Yhy\LaravelLib\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * 基层验证
 * Class BaseRule
 *
 * @package Yhy\LaravelLib\Rules
 */
class BaseRule implements Rule
{
    protected $message;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message ?? "验证不通过";
    }
}
