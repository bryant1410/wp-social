<?php
/**
 * Core Controller
 *
 * @package Social
 */
abstract class Social_Controller {

	/**
	 * @var  Social_Request
	 */
	protected $request;

	/**
	 * Passes in the request object.
	 *
	 * @param  Social_Request  $request
	 */
	public function __construct(Social_Request $request) {
		$this->request = $request;
	}

} // End Social_Controller
