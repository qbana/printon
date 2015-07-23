<?php


use Laracasts\TestDummy\Factory as TestDummy;


class ProductTest extends TestCase {

    public function test_home_page()
    {
        $this->visit('/products');
    }

}