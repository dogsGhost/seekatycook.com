<?php

class Page {
	private $pageTitle, $siteTitle, $navLinks, $link, $root;

	public function __construct() {
		$this->pageTitle = "";
		$this->siteTitle = "See Katy Cook, Homemade Ice Cream from Michigan";
		$this->root = "/"; // was: $this->setRoot() . "/"
		$this->fileName = basename($_SERVER["PHP_SELF"], ".php");
		// Store our navigation links and text.
		$this->navLinks = array(
			array(
				'url'  => $this->root, 
				'text' => 'Home'
			),
			array(
				'url'  => 'flavors.php',
				'text' => 'Flavors'
			),
			array(
				'url'  => 'availability.php',
				'text' => 'Availability'
			),
			array(
				'url'  => 'contact.php',
				'text' => 'Contact'
			)
		);
	}

	// GETTERS

	public function getPageTitle() {
		return $this->pageTitle;
	}
	
	public function getSiteTitle() {
		if ($this->pageTitle) {
			return " | " . $this->siteTitle;
		} else {
			return $this->siteTitle;		
		}
	}

	public function getNavigation() {
		$navLinks = '<ul>';
		foreach ($this->navLinks as $link) {
			// If the link url and file name are the same OR its the homepage then add current class.
			if ($this->fileName === str_replace('.php', '', $link['url']) ||
			($link['url'] === $this->root && $this->fileName === 'index')) {
				$navLinks .= '<li class="current"><a href="' . $link['url'] . '">';
			} else {
				$navLinks .= '<li><a href="' . $link['url'] . '">';
			}
			$navLinks .= $link['text'];
			$navLinks .= '</a></li>';
		}
		$navLinks .= '</ul>';
		return $navLinks;
	}

	public function getFileName() {
		return $this->fileName;
	}

	public function getProducts() {
		$file = simplexml_load_file('xml/products.xml');
		
	}

	// SETTERS

	public function setPageTitle($pageTitle) {
		$this->pageTitle = $pageTitle;
	}

	// Used for local development.
	private function setRoot() {
		// get the path
		$root = explode('/', $_SERVER['PHP_SELF']);
		// remove file name
		array_pop($root);
		$root = implode('/', $root);
		// return path
		return $root;
	}
}

// Create a new Page for the current file this is included in.
$Page = new Page();