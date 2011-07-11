<?php
/**
 * Defines the logo permission form page type
 */
class LogoRightsPage extends Page {

	static $db = array(
    	'LogoURL' => 'Text',
		);
		
	static $has_many = array(
		// Relates the submission data objects to this page
		'LogoRightsSubmissions' => 'LogoRightsSubmission'
	);
	
	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		
			// Adds a sortable table of the submissions into the CMS
		    $manager = new DataObjectManager(
			$this,
			'LogoRightsSubmissions',
			'LogoRightsSubmission'
		);
				
		$fields->addFieldToTab("Root.Content.Submisions", $manager);
		
    	$fields->addFieldToTab('Root.Content.Main', new TextField('LogoURL','Path to logo downloads page (URL)'), 'Content');
		
		$fields->renameField("Content", "Usage Agreement");
		
		return $fields;
	}
	
}
 
class LogoRightsPage_Controller extends Page_Controller {

	// enables the form to be submitted
	static $allowed_actions = array(
		'LogoForm'
	);
	
	function LogoForm() {
		// Create fields 
		$fields = new FieldSet(
		new TextField('Name', 'Name*'),
		new EmailField('Email', 'Email*')
		);
		
		// Create action
		$actions = new FieldSet(
		new FormAction('doLogoPermissions', 'I AGREE')
		);
		
		// Create Validators
		$validator = new RequiredFields('Name', 'Email');
		
		// Form(controller, form name, fields, actions, validator)
		return new Form($this, 'LogoForm', $fields, $actions, $validator);
	}
	
	// called when the form is submitted (see 'form action' above)
	function doLogoPermissions($data, $form) {
	    $submission = new LogoRightsSubmission();
	    $form->saveInto($submission);
	    //Giving the submission a page ID establishes the realtionship required for it to work in the DOM view in the CMS.
		$submission->LogoRightsPageID = $this->ID;
	    $submission->write();
	    
	    Session::set('LogoSignoffCompleted', true);
	
		Director::redirect($this->LogoURL);
	}
	
	
	function init() {
		parent::init();
		
		// turns off JS validation for SS which is based on protoype
		Validator::set_javascript_validation_handler('none'); 
		// adding JS for jquery based validation
		Requirements::javascript("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js");
		Requirements::javascript("http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js");
		Requirements::customScript('
				jQuery(document).ready(function() {
					jQuery("#Form_LogoForm").validate({
						rules: {
								Name: "required",
						Email: {
								required: true,
								email: true
						}
					},
					messages: {
								Name: "Oops... Please provide your name.",
								Email: "Oops... Please provide your email address.",
								}
						});
					});
				');
	}
}
 
?>