<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 验证中文名
 * Class ChineseRule
 *
 * @package App\Rules
 */
class ChineseNameRule extends BaseRule
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
        $pattern= '/^(?:[\u4e00-\u9fa5·]{2,16})$/';
        if (!preg_match($pattern,$value)){
            $this->message = '不是中文名';
            return false;
        }
        return true;
    }

}
