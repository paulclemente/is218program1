<?php
	//This is how you print text in php
	echo'hello world';
	
	//This is how you store value in a variable
	$myvar = 'Some text I want to store in a variable';
	
	//This is an example of a difference between single and double quotes
	echo'$myvar';
	echo'<br>';
	echo"$myvar";

	//This is how to make an array
	$myarray = array(); //creating the array
	$myarray[] = 'some value 1'; /*basically pushing it into the array,take value and push it into
	array*/
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';

	print_r($myarra)?;
	/* two ways to print is echo and print. they do the same thing, print_r is
	used to view inside of objects or arrays. it does not just print text*/

	$myAssoc = array('value1' => $myarray, 'value2' => $myarray); /* A nested array - one array
	within another array. Its also an associative array which you have named keys */

	print_r($myAssoc);
	
	print_r($myAssoc['value1']);

	//This is how you define a class in php
	class myclass{
		public $myPublic;
		private $myPrivate;
		protected $myProtected;

		public function __construct(){
		$this->myPublic = 1;
		$this->myPrivate = 2;
		$this->myProtected =3;
		
		$this-> sayHello('Paul');
		}

	}
	
	/* this is how you instantiates (take the blueprint(class) and turn it into an object)a new class object*/
	$obj = new myclass;
	print_r($obj);
?>


