<?php 
use PHPUnit\Framework\TestCase;
require "index.php";

class inputType extends TestCase {
	public function testString(){
		$test= new StrUtils("Bonsoir messieurs");
		$this->assertInternalType('string',$test->bold());
		$this->assertInternalType('string',$test->italic());
		$this->assertInternalType('string',$test->underline());
		$this->assertInternalType('string',$test->capitalize());
		$this->assertInternalType('string',$test->uglify());
	}
}

?>