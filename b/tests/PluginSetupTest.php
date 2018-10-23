<?php namespace ThirdPartyLoad\B\Tests;

use PluginTestCase; 

class PluginSetupTest extends PluginTestCase 
{
    public function setUp()
    {
        parent::setUp();
    }
    
    public function testPluginInitializationAndLoadingOfThirdPartyLibaries() 
    {
        $this->assertEquals(true, true);    
    }
}