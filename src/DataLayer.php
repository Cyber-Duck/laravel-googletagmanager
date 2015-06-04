<?php

namespace Spatie\GoogleTagManager;

class DataLayer
{
    /**
     * @var array
     */
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    /**
     * Add data to the data layer. Supports dot notation.
     * Inspired by laravel's config repository class.
     * 
     * @param  array|string $key
     * @param  mixed $value
     * @return void
     */
    public function set($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $innerKey => $innerValue) {
                array_set($this->data, $innerKey, $innerValue);
            }

            return;
        }

        array_set($this->data, $key, $value);
    }

    /**
     * Empty the data layer.
     * 
     * @return void
     */
    public function clear()
    {
        $this->data = [];
    }

    /**
     * Return a json representation of the data layer
     * 
     * @return string
     */
    public function toJson()
    {
        return empty($this->data) ? null : json_encode($this->data);
    }
}