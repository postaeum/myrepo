<?php

$hello = new HelloWorld();
$hello->hello();

$hello->create_tab();

/**  This is my first file */
class HelloWorld
{

	function __construct()
	{
		
	}

	function create_tab()
	{
		
	}

	function hello()
	{
		die(__METHOD__);
		// something is bad here.
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

	function done()
	{
		/* Figured out how to close an issue. */
		/* But can't set resolution? */
	}

	/**
	 * Test Resolve.
	 */
	function resolve()
	{
		// Resolve not working.
		// Something.
		// Done.
	}

	function test(){
		// Does nothing.
	}

	function create_git_conflict(){
		echo \"Hello World\";
	}

}
