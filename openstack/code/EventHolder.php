<?php
/**
 * Defines the JobsHolder page type
 */
class EventHolder extends Page {
   static $db = array(
   );
   static $has_one = array(
   );
 
   static $allowed_children = array('EventPage');
   /** static $icon = "icon/path"; */
      
}
 
class EventHolder_Controller extends Page_Controller {
	
	function init() {
	    parent::init();
	}
	
	function RandomEventImage(){ 
		return DataObject::get('Image', "ClassName <> 
		'Folder' AND ParentID = (SELECT ID FROM File WHERE ClassName = 'Folder' 
		AND Name = 'EventImages')",'RAND()','','1');
	}
	
	function PastEvents($num = 4) {
		return DataObject::get('EventPage', "EventEndDate <= now() AND IsSummit <> TRUE", "EventEndDate DESC", "", $num);
	}
	
	function FutureEvents($num = 4) {
		return DataObject::get('EventPage', "EventEndDate >= now()", "EventStartDate ASC", "", $num);
	}
	
	function PastSummits($num = 4) {
		return DataObject::get('EventPage', "EventEndDate <= now() AND IsSummit = TRUE", "EventEndDate DESC", "", $num);
	}
}
 
?>