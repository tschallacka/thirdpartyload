<?php namespace ThirdPartyLoad\C\Tests;

use PluginTestCase; 

class PluginSetupTest extends PluginTestCase 
{
    public function setUp()
    {
        parent::setUp();
    }
    
    public function testPluginInitialisation() 
    {
        $this->assertEquals(true, true);    
    }
}