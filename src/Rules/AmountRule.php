<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 自定义验证金额
 * Class AmountRule
 *
 * @package App\Rules
 */
class AmountRule extends BaseRule
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
        $pattern = "/((^[1-9]\d*)|^0)(\.\d{0,2})?$/";
        if (!preg_match($pattern,$value)) {
            $this->message = "请输入正确的金额";
            return false;
        }
        return true;
    }

}
