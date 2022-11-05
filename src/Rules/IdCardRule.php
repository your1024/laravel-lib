<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 验证身份证
 * Class IdCardRule
 *
 * @package App\Rules
 */
class IdCardRule extends BaseRule
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
        $pattern18 = "/^([1-6][1-9]|50)\d{4}(18|19|20)\d{2}((0[1-9])|10|11|12)(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/";
        $pattern15 = "/^([1-6][1-9]|50)\d{4}\d{2}((0[1-9])|10|11|12)(([0-2][1-9])|10|20|30|31)\d{3}$/";
        if (!preg_match($pattern15,$value) && !preg_match($pattern18,$value)){
            $this->message = '身份证号不正确:15或18位';
            return false;
        }
        return true;
    }
}
