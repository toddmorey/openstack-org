<?php
	class CommunityPage extends Page {
		static $db = array(
		);
		static $has_one = array(
	     );
	}

	class CommunityPage_Controller extends Page_Controller {
			
		function init() {
			parent::init();
		}		
		
		function DeveloperActivityFeed(){ 
	   		$data = file_get_contents('http://www.openstack.org/feeds/developer-activity.php');
	   		return $data;
		}
		
		function PullFeed(){ 
			   		$data = file_get_contents('http://www.openstack.org/simplepie/flickr.php'); 
			   		return $data;
		}		
	}
?>