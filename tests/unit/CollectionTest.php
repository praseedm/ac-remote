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

    /** @test */
    public function add_items_to_collection () {
        $collection = new Collection([
            'one', 'two'
        ]);
        $collection->add(['three']);
        $this->assertEquals(3,$collection->get_count());
        $this->assertCount(3,$collection->get());
    }

    /** @test */
    public function merge_collection_together() {
        $collection1 = new Collection([
            'one', 'two'       ]);
        $collection2 = new Collection([
            'three', 'four', 'five' ]);
        $collection1->merge($collection2);
        $this->assertEquals(5,$collection1->get_count());
        $this->assertCount(5,$collection1->get());
    }

    /** @test */
    public function return_json_encoded_items () {
        $collection = new Collection([
            ['username' => 'billy'],
            ['username' => 'tom']
        ]);

        $this->assertInternalType('string', $collection->toJson());
        $this->assertEquals('[{"username":"billy"},{"username":"tom"}]', $collection->toJson());
    }
}