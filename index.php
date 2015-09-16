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

	/**
	 * Related to issue MFP-8 Administration console.
	 */
	function create_console()
	{
		
	}

	/**
	 * Added function comment.
	 */
	function close_console()
	{
		/* The commit didn't changed issue status nor added a comment. 
		 * I have to try again. Still not workin. */
		echo "console";
	}

	/**
	 * Change email address so JIRA can see commands in commit
	 */
	function change_email()
	{
		
	}

	function confirm_comments()
	{
		echo "comments are working now";
		/* But #close not working. Maybe I should add taks id? */
	}

}
