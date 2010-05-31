<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package CodeIgniter
 * @license http://www.codeignitor.com/user_guide/license.html
 *
 * @author Jack Boberg
 * @copyright ( coded by hand ) 2010-05
 * @license http://creativecommons.org/licenses/BSD/
 *
 **/

class Api extends Controller {

/**
 * constructor
 *
 * @param void
 *
 * @return void
 **/
public function __construct() {
	parent::__construct();
	log_message('debug', get_class($this) . ' controller initialized.');
}

// --------------------------------------------------------------------

/**
 * Reading posts as XML or JSON
 *
 * @access	public 
 * @param	string $format - response format
 * @return	string
 **/
public function read($format='XML')
{
	log_message('debug', get_class($this) . "->read($format)");
}

// --------------------------------------------------------------------

/**
 * Creating posts
 *
 * @access	public 
 * @param	void
 * @return	string
 **/
public function write()
{
	log_message('debug', get_class($this) . '->write');
	// Return values
	// We return standard HTTP status codes for each request, plus a plaintext response.
	// 201 Created - Success! The newly created post's ID is returned.
	// 403 Forbidden - Your email address or password were incorrect.
	// 400 Bad Request - There was at least one error while trying to save your post. Errors are sent in plain text, one per line.
}

// --------------------------------------------------------------------

/**
 * Validating credentials and getting account information
 *
 * @access	public 
 * @param	void
 * @return	void
 **/
public function authenticate()
{
	log_message('debug', get_class($this) . '->authenticate');
}

// --------------------------------------------------------------------

} // end class
/* End of file api.php */
/* Location: ./application/controllers/api.php */