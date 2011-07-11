<?php
	class MediaListPage extends Page {
		static $db = array(
		);
		static $has_one = array(
	     );
		static $has_many = array(
			'MediaEntries' => 'MediaEntry'
		);
	     
	    function getCMSFields() {
	    	$fields = parent::getCMSFields();
	    	$mediaTable = new DataObjectManager($this, 'MediaEntries', 'MediaEntry');
	    	$fields->addFieldToTab('Root.Content.MediaEntries',$mediaTable);
	    	return $fields;
		}
	}

	class MediaListPage_Controller extends Page_Controller {
	
		//Allow our 'show' function as a URL action
		static $allowed_actions = array(
		      'videos',
		      'whitepapers',
		      'press',
		      'slides',
		      'articles'
		);
			
		function init() {
			parent::init();
		}
		function DisplayMedia($type = "all") {
			
			// Expand template variables if needed
			if ($type == "press" or $type == "Press"){
				$type = "Press Release";
			} else if ($type == "slides") {
				$type = "Presentation Slides";
			}
		
			if ($type == "all" or $type == "All") {
				$DisplayQuery = "DisplayOnSite = TRUE";
			} else {
				$DisplayQuery = "DisplayOnSite = TRUE AND Type = '" . $type . "'";
			}
			
			$DisplayedMedia = DataObject::get("MediaEntry",$DisplayQuery);
			if ($DisplayedMedia) {
				$DisplayedMedia->sort('Date','DESC');
				return $DisplayedMedia;
			} else {
				return 0;
			}
		}		
	}
?>