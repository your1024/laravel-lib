<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 验证邮政编码
 * Class PostRule
 *
 * @package App\Rules
 */
class PostRule extends BaseRule
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
        $pattern = "/^(0[1-7]|1[0-356]|2[0-7]|3[0-6]|4[0-7]|5[1-7]|6[1-7]|7[0-5]|8[013-6])\d{4}$/";
        if (!preg_match($pattern,$value)){
            $this->message = "邮政编码不正确";
            return false;
        }
        return true;
    }
}
