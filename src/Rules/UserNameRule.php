<?php

namespace Yhy\LaravlLib\Rules;


use Yhy\LaravelLib\Rules\BaseRule;

/**
 * 验证用户名
 * Class UserNameRule
 *
 * @package App\Rules
 */
class UserNameRule extends BaseRule
{
    protected $message;
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
        $pattern = "/^[a-zA-Z0-9_-]{4,16}$/";
        if (!preg_match($pattern,$value)){
            $this->message = "用户名：4到16位（字母，数字，下划线，减号）";
            return false;
        }
        return true;
    }

}
