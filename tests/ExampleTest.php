<?php

class ExampleTest extends TestCase
{
    public function testBasicExample()
    {
        $response = $this->route('POST', 'backend.login');

        $this->assertEquals( 302, $response->getStatusCode() );
    }

}
