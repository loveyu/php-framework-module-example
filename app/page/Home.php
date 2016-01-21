<?php
namespace UView;

use \Core\Page;

class Home extends Page {
	function __construct() {
		parent::__construct();
	}

	public function main() {
		header("Content-Type: text/plain;charset=utf-8");
		print_r(cfg()->get());
	}

	public function not_found() {
		send_http_status(404);
		echo "This is 404 page.";
	}
}