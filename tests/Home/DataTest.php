<?php


class DataTest extends TestCase {

    public function testDatabase() {

        $this->seeInDatabase('Form', [
            'age' => 888
        ]);
    }
}