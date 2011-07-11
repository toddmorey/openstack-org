<?php
	class FeatureTable extends Page {
		static $db = array(
		);
		static $has_one = array(
	     );
		static $has_many = array(
			'Features' => 'Feature'
		);
	     
	    function getCMSFields() {
	    	$fields = parent::getCMSFields();
	    	$featureGroup = new DataObjectManager($this, 'Features', 'Feature');
	    	$fields->addFieldToTab('Root.Content.Features',$featureGroup);
	    	return $fields;
		}
	}

	class FeatureTable_Controller extends Page_Controller {
	
		//Allow our 'show' function as a URL action
		static $allowed_actions = array(
		      'pdf'
		);
			
		function init() {
			parent::init();
		}
		
		function DisplayFeatures() {
			$Features = DataObject::get("Feature","FeatureTableID = $this->ID");
			return $Features;
		}
		
	}
?>