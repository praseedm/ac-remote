<?php
namespace Models;


class Collection
{
    protected $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function get() {
         return $this->items;
    }

    public function get_count() {
        return count($this->items);
    }

}