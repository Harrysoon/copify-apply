<?php 

require 'Codez.php';

class CodezTest extends PHPUnit_Framework_TestCase {
	
	protected $Codez;

	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	protected function setUp() {
        	$this->Codez = new Codez();
    	}

	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_foo() {
		$this->assertTrue($this->Codez->foo());
	}


	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_addition() {
		$first_number = 6;
		$second_number = 400;
		$result = $this->Codez->addition($first_number,$second_number);
		$expected = 406;
		$this->assertEquals($expected , $result);
	}


	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_array_reverse() {
		$array= array("Fizz" , "Bang" , "Pop");
		$result = $this->Codez->array_reverse($array);
		$expected = array("Pop" , "Bang" , "Fizz");
		$this->assertEquals($expected ,$result);
	}


	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_jsonify() {
		$array = array("Fizz" , "Bang" , "Pop");
		$result = $this->Codez->jsonify($array);
		$expected = '["Fizz","Bang","Pop"]';
		$this->assertEquals($expected ,$result);
	}


	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_make_image_tag() {
		$url = 'https://mycloud.rackspace.com/site_media/images/logo-rackspace-large.png';
		$alt = 'Rackspace Logo';
		$result = $this->Codez->make_image_tag($url , $alt);
		$expected = '<img src="https://mycloud.rackspace.com/site_media/images/logo-rackspace-large.png" alt="Rackspace Logo" />';
		$this->assertEquals($expected ,$result);

		$url = 'http://i.telegraph.co.uk/multimedia/archive/02442/google_2442263b.jpg';
		$alt = 'Google Logo';
		$result = $this->Codez->make_image_tag($url , $alt);
		$expected = '<img src="http://i.telegraph.co.uk/multimedia/archive/02442/google_2442263b.jpg" alt="Google Logo" />';
		$this->assertEquals($expected ,$result);
	}


	/**
	 * Function description should be here
	 * @author robmcvey
	 * @param null
	 * @return void
	 */
	public function test_replace_multiples_of_three_or_five_with_the_word_fizz() {
		$array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
		$result = $this->Codez->replace_multiples_of_three_or_five_with_the_word_fizz($array);
		$expected = array(1,2,"Fizz",4,"Fizz","Fizz",7,8,"Fizz","Fizz",11,"Fizz",13,14,"Fizz",16,17,"Fizz",19,"Fizz");
		$this->assertEquals($expected ,$result);
	}

}
