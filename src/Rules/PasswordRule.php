<?php

namespace Yhy\LaravelLib\Rules;


/**
 * 验证密码
 * Class PasswordRule
 *
 * @package App\Rules
 */
class PasswordRule extends BaseRule
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
        $pattern = "/^\S*(?=\S{6,})(?=\S*\d)(?=\S*[A-Z])(?=\S*[a-z])(?=\S*[!@#$%^&*? ])\S*$/";
        if (!preg_match($pattern,$value)){
            $this->message = "最少6位，包括至少1个大写字母，1个小写字母，1个数字，1个特殊字符";
            return false;
        }
        return true;
    }
}
