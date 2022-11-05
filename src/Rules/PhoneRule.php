<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 自定义验证手机号码
 * Class PhoneRule
 *
 * @package App\Rules
 */
class PhoneRule extends BaseRule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
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
        $reg = "/^(?:(?:\+|00)86)?1[3-9]\d{9}$/";
        if (!preg_match($reg,$value)){
            $this->message = '手机号码不正确';
            return false;
        }
        return true;
    }
}
