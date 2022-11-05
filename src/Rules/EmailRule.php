<?php

namespace Yhy\LaravelLib\Rules;


/**
 * 验证邮箱
 * Class EmailRule
 *
 * @package App\Rules
 */
class EmailRule extends BaseRule
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
        $pattern = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        if (!preg_match($pattern,$value)){
            $this->message = '邮箱格式不正确';
            return false;
        }
        return true;
    }

}
