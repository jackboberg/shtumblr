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
	
	/**
	 * start - The post offset to start from. The default is 0.
	 * num - The number of posts to return. The default is 20, and the maximum is 50.
	 * type - The type of posts to return. If unspecified or empty, all types of posts are returned. Must be one of text, quote, photo, link, chat, video, or audio.
	 * id - A specific post ID to return. Use instead of start, num, or type.
	 * filter - Alternate filter to run on the text content. Allowed values:
	 * text - Plain text only. No HTML.
	 * none - No post-processing. Output exactly what the author entered. (Note: Some authors write in Markdown, which will not be converted to HTML when this option is used.)
	 * tagged - Return posts with this tag in reverse-chronological order (newest first). Optionally specify chrono=1 to sort in chronological order (oldest first).
	 * search - Search for posts with this query.
	 * state (Authenticated read required) - Specify one of the values draft, queue, or submission to list posts in the respective state.
	 * 
	 * callback - A function name to call with the JSON object as its only parameter. When set, the function will be called instead of the tumblr_api_read variable being set.
	 */
}

// --------------------------------------------------------------------

/**
 * Creating posts, requires authentication
 *
 * @access	public 
 * @param	void
 * @return	string
 **/
public function write()
{
	log_message('debug', get_class($this) . '->write');
	
	// see: http://www.tumblr.com/docs/en/api#api_write
	
	// Return values
	// We return standard HTTP status codes for each request, plus a plaintext response.
	// 201 Created - Success! The newly created post's ID is returned.
	// 403 Forbidden - Your email address or password were incorrect.
	// 400 Bad Request - There was at least one error while trying to save your post. Errors are sent in plain text, one per line.
}

// --------------------------------------------------------------------

/**
 * delete a post, requires authentication
 *
 * @access	public 
 * @param	void
 * @return	void
 **/
public function delete()
{
	log_message('debug', get_class($this) . '->delete');

	/**
	 * 	post-id - The integer ID of the post you wish to delete.
	 */
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

/**
 * implementing the following methods seems pointless, as this is intended to be
 * a self-hosted application, and therefore not part of the tumblr network
 *
 * /dashboard
 * /likes
 * /like
 * /unlike
 * 
 * in order to support the API completely though, we should probably respond
 * to these requests with a meaningful status code
 */

// --------------------------------------------------------------------

/**
 *
 * To read your tumblelog's Pages, fetch http://(YOU).tumblr.com/api/pages
 * and you'll get a structured XML copy of all pages for which the "Show a
 * link to this page" option in the Customize screen is enabled.
 *
 * To include all pages regardless of the "Show a link to this page" option,
 * perform an authenticated read of http://(YOU).tumblr.com/api/pages
 * in the same manner.
 *
 * @access	public 
 * @param	void
 * @return	string (xml)
 **/
public function pages()
{
	log_message('debug', get_class($this) . '->pages');
}

// --------------------------------------------------------------------

} // end class
/* End of file api.php */
/* Location: ./application/controllers/api.php */