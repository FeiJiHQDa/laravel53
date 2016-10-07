<?php


class FormTest extends TestCase  {
//testNewUserRegistration
    public function testNewUserRegistration () {
        $this->visit('form/create')
            ->type('whcs', 'Form[name]')
            ->type('199', 'Form[age]')
            ->check('Form[age]');
    }
}