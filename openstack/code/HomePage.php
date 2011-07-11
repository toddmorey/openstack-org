<?php
/**
 * Defines the HomePage page type
 */
 
class HomePage extends Page {
   static $db = array(
		'NumberOfMembers' => 'Text',
		'NumberOfCompanies' => 'Text',
		'FeedData' => 'HTMLText'
   );
   static $has_one = array(
   );

	function getCMSFields() {
	$fields = parent::getCMSFields();
	
	$fields->addFieldToTab("Root.Content.Main", new TextField('NumberOfMembers','Current Number of Members'), 'Content');
		
	// remove unneeded fields 
	$fields->removeFieldFromTab("Root.Content.Main","Content");

	return $fields;
	}   
}
 
class HomePage_Controller extends Page_Controller {
		
	function LatestEvents($num=1) {
	  $latestEvents = DataObject::get_one("EventHolder");
	  return ($latestEvents) ? DataObject::get('EventPage', "EventEndDate >= now()", "EventStartDate ASC", "", $num) : false;
	}
		
	
	function init() { 
	   parent::init(); 
	       	       
//	    Set default currency unless this is a returning visitor 
	   $VisitorCookie = new Cookie; 
	   if(!$VisitorCookie->get('ReturningVisitor')) { 
	         $VisitorCookie->set('ReturningVisitor', TRUE); 
	   }
	   
	   // Update feed if requested
	   $updatefeed = 0;
	   if (isset($_GET['updatefeed'])) {
			$data = file_get_contents(Director::absoluteBaseURL().'feeds/openstack.php');
			
			// Look to see if twitter showed up in the feed. If not, don't update.
			// This hack is in place to make sure twitter doesn't disappear when the API is too slow to respond.
			$pos = strpos($data,'twitter');
			if($pos>0) {
				echo "including twitter";
				$this->dataRecord->FeedData = $data; // context of _controller makes expanding to dataRecond nessesary
				$this->dataRecord->write();
			}
	   }
	   	   
	}	
	
	function ReturningVisitor() {
		$VisitorCookie = new Cookie;
		return ($VisitorCookie->get('ReturningVisitor')==TRUE);
	}
	
	function CompanyCount() {
		$DisplayedCompanies = DataObject::get("Company","DisplayOnSite = TRUE");
		$Count = $DisplayedCompanies->Count();
		return $Count;
	}
			
}

?>