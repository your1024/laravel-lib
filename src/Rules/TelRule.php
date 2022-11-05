<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 验证国内座机电话
 * Class TelRule
 *
 * @package App\Rules
 */
class TelRule extends BaseRule
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
        $pattern = "/^(?:(?:\d{3}-)?\d{8}|^(?:\d{4}-)?\d{7,8})(?:-\d+)?$/";
        if (!preg_match($pattern,$value)){
            $this->message = '座机/电话格式不正确';
            return false;
        }
        return true;
    }

}
