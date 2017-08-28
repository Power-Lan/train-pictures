<?php

use \pl\trains\Picture;

class SessionMongoDBTest extends \PHPUnit\Framework\TestCase
{
    public function testGetList()
    {
        $trains = Picture::getList();

        $this->assertequals(basename($trains['BB-9600']), 'BB-9600.jpg');
    }
}
