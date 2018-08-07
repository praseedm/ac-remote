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

    public function add(array $item) {
        return $this->items = array_merge($this->items, $item);
    }

    public function merge(Collection $collection) {
        return $this->add($collection->get());
    }

    public function toJson() {
        return json_encode($this->items);
    }
}