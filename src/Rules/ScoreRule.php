<?php

namespace Yhy\LaravelLib\Rules;

/**
 * 自定义积分验证
 * Class Score
 *
 * @package Yhy\LaravelLib\Rules
 */
class ScoreRule extends BaseRule
{
    protected $min;
    protected $max;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(float $min, float $max)
    {
        parent::__construct();
        $this->min = $min;
        $this->max = $max;
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
        $pattern = '/^([0-9]*)(.[0-9])?$/';
        if (!preg_match($pattern,$value) || bccomp($value,$this->min,1) === -1 || bccomp($value,$this->max,1) === 1){
            $this->message = "评分应在{$this->min} ~ {$this->max}之间";
            return false;
        }
        return true;
    }
}
