<?php


class FormTest extends TestCase  {
//testNewUserRegistration
    public function testNewUserRegistration () {
        $this->visit('form/create')
            ->type('whcs', 'Form[name]')
            ->type('199', 'Form[age]')
            ->select('1', 'Form[sex]')
            ->check('Form[age]');
    }

    // 传入数组和json 是否匹配
    public function testArrayJson() {
        $this->json('POST', '/testJson', ['name' => 'Sally', 'age' => '19'])
//            ->seeJson([
            ->seeJsonEquals([
                'name'=>'whc',
                'age' => 18
            ]);
    }

    public function testApplication() {

        $response = $this->call('GET', '/');
        $this->assertEquals(200,$response->status());
    }
}