<?php
/**
 * Defines the JobPage page type
 */
class JobPage extends Page {
   static $db = array(
    	'JobPostedDate' => 'Date',
    	'JobCompany' => 'Text',
    	'JobMoreInfoLink' => 'Text',
    	'JobLocation' => 'Text'
	);
   static $has_one = array(
   );
   /** static $icon = "icon/path"; */
   
	public function RecentJob($fieldname) {
		//check if the job posting is less than four weeks old
   		 return $this->$fieldname > date('Y-m-d H:i:s',strtotime('-4 weeks'));
	}
	   
 	function getCMSFields() {
    	$fields = parent::getCMSFields();
    	
    	// the date field is added in a bit more complex manner so it can have the dropdown date picker
    	$JobPostedDate = new DateField('JobPostedDate','Date Posted');
    	$JobPostedDate->setConfig('showcalendar', true);
    	$JobPostedDate->setConfig('showdropdown', true);
		$fields->addFieldToTab('Root.Content.Main', $JobPostedDate, 'Content');
    	
    	$fields->addFieldToTab('Root.Content.Main', new TextField('JobLocation','Job Location'), 'Content');
    	$fields->addFieldToTab('Root.Content.Main', new TextField('JobMoreInfoLink','More Information About This Job (URL)'), 'Content');
    	$fields->addFieldToTab('Root.Content.Main', new TextField('JobCompany','Company'), 'Content');
    	
		// remove unneeded fields 
		$fields->removeFieldFromTab("Root.Content.Main","MenuTitle");
		
		// rename fields
		$fields->renameField("Content", "Job Description");
		$fields->renameField("Title", "Job Title");
    
    	return $fields;
 	}   
}
 
class JobPage_Controller extends Page_Controller {
 
}
 
?>