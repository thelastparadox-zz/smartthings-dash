<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		require_once FCPATH.'/vendor/autoload.php';
		$loader = new Twig_Loader_Filesystem(FCPATH.'application/views/');
		$twig = new Twig_Environment($loader);

		$template = $twig->load('index.html');

		echo $template->render();
	}
}
