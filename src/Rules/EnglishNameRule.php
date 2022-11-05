<?php

namespace Yhy\LaravelLib\Rules;


/**
 * 验证英文名
 * Class EnglishNameRule
 *
 * @package App\Rules
 */
class EnglishNameRule extends BaseRule
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
        $pattern = '/(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)/';
        if (!preg_match($pattern,$value)){
            $this->message = '不是英文名';
            return false;
        }
        return true;
    }
}
