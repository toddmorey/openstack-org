<?php
/**
 * Defines the JobsHolder page type
 */
class JobHolder extends Page {
   static $db = array(
   );
   static $has_one = array(
   );
 
   static $allowed_children = array('JobPage');
   /** static $icon = "icon/path"; */
}
 
class JobHolder_Controller extends Page_Controller {
	function rss() {
	  $rss = new RSSFeed($this->Children(), $this->Link(), "OpenStack Jobs Feed");
	  $rss->outputToBrowser();
	}
	function init() {
	   RSSFeed::linkToFeed($this->Link() . "rss");	
	   parent::init();
	}
}
 
?>