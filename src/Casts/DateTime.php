<?php

namespace Yhy\LaravelLib\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class DateTime implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return false|string
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return date('Y-m-d H:i:s',$value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return false|int
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return strtotime($value);
    }
}
