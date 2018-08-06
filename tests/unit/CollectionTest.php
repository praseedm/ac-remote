<?php

use \Models\Collection;
class CollectionTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function empty_collection_return_null () {
        $collection = new Collection;
        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function count_is_correct() {
        $collection = new Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3,$collection->get_count());
    }

    /** @test */
    public function match_item () {
        $collection = new Collection([
            'one', 'two'
        ]);
        $this->assertCount(2, $collection->get());
        $this->assertEquals('one', $collection->get()[0]);
    }
}