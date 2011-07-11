<?php
/**
 * Defines the RestrictedDownload page type
 */
class RestrictedDownloadPage extends Page {
   static $db = array(
	);
   static $has_one = array(
   );
   
 	function getCMSFields() {
    	$fields = parent::getCMSFields();
    	
    	return $fields;
 	}   
}
 
class RestrictedDownloadPage_Controller extends Page_Controller {
 
function init() {
	parent::init();
	
	$ParentURL = $this->Parent()->Link();
	
	//check to see if they've completed an approval form
	if(!Session::get('LogoSignoffCompleted')) {
		Director::redirect($ParentURL);
		}
  
	}
} 
?>