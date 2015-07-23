<?php


use Laracasts\TestDummy\Factory as TestDummy;


class HomeTest extends TestCase {

    public function test_home_page()
    {
        $this->visit('/');
    }

}
