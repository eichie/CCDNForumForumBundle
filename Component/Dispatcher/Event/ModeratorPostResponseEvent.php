<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNForum\ForumBundle\Component\Dispatcher\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use CCDNForum\ForumBundle\Entity\Post;

/**
 *
 * @category CCDNForum
 * @package  ForumBundle
 *
 * @author   Reece Fowell <reece@codeconsortium.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @version  Release: 2.0
 * @link     https://github.com/codeconsortium/CCDNForumForumBundle
 *
 */
class ModeratorPostResponseEvent extends ModeratorPostEvent
{
	/**
	 * 
	 * @access protected
	 * @var \Symfony\Component\HttpFoundation\Response $response
	 */
	protected $response;

	/**
	 * 
	 * @access public
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \CCDNForum\ForumBundle\Entity\Post         $post
	 * @param \Symfony\Component\HttpFoundation\Response $response
	 */
	public function __construct(Request $request, Post $post = null, Response $response)
	{
		$this->request = $request;
		$this->post = $post;
		$this->response = $response;
	}

	/**
	 * 
	 * @access public
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function getResponse()
	{
		return $this->response;
	}
}