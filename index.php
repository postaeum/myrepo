<?php

$hello = new HelloWorld();
$hello->hello();

/**  This is my first file */
class HelloWorld
{

	function __construct()
	{
		
	}

	function hello()
	{
		echo "Hello to you too!";
	}

	/**
	 * Create account for corvin.
	 * @param type $username
	 */
	function create_account($username = "default")
	{
		echo "created account for $username";
	}

}
