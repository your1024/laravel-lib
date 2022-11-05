<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 验证银行卡账户
 * Class BankAccountRule
 *
 * @package App\Rules
 */
class BankAccountRule extends BaseRule
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
        $pattern= "/^[1-9]\d{9,29}$/";
        if (!preg_match($pattern,$value)){
            $this->message = '银行卡号不正确';
            return false;
        }
        return true;
    }
}
