<?php


use Laracasts\TestDummy\Factory as TestDummy;


class TagTest extends TestCase {

    public function test_home_page()
    {
        #$this->visit('tags')->dump();
        #OR :  ->submitForm()
        #->select('optionName' 'optionValue')
        #->check('opt-in')
        $this->visit('/tags')
             ->andSee('Produkty');

        $this->visit('/tags/create')
            ->type('Nowy tag', 'name')
            ->type('Nowy-tag', 'slug')
            ->type('The body', 'body')
            ->press('publish')
            ->see('Nowy tag')
            ->onPage('tags');
    }


}