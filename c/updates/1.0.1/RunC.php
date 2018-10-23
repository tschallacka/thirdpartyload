<?php namespace ThirdPartyLoad\B\Updates;

use October\Rain\Database\Updates\Migration;
use JsonStreamingParser\Listener;

class RunC extends Migration implements Listener 
{
    public function up() 
    {
                    
    }
    
    public function down() 
    {
        
    }
    
    public function startObject()
    {}

    public function startArray()
    {}

    public function endArray()
    {}

    public function whitespace($whitespace)
    {}

    public function startDocument()
    {}

    public function endDocument()
    {}

    public function value($value)
    {}

    public function key($key)
    {}

    public function endObject()
    {}

}