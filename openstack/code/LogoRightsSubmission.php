<?php
 
class LogoRightsSubmission extends DataObject {
   // Define what variables this data object has
   static $db = array(
	'Name' => 'Text',
	'Email' => 'Text'
   );
   
   // Create a relationship between the data object and its parent page. This is needed especially for the DOM's edit windows to work.
	static $has_one = array (
		'LogoRightsPage' => 'LogoRightsPage'
	);

	//Define fields to show in the DOM list view table
	static $summary_fields = array(
		// 'field name' => 'column label'
		'Name' => 'Name',  
		'Email' => 'Email'
	);
	
	//Define fields to show in the popup editor window
	public function getCMSFields()
	{
		return new FieldSet(
			new TextField('Name'),
			new TextField('Email')
		);
	}

}
 
?>