<?php
	
class Feature extends DataObject {

	static $db = array(
		'Feature' => 'HTMLText',
		'URL' => 'Text',
		'Benefit' => 'HTMLText',
	);
	
	static $has_one = array(
		'FeatureTable' => 'FeatureTable',
	);
	
	static $singular_name = 'Feature';
	static $plural_name = 'Features';
	
	static $summary_fields = array( 
	      'Feature' => 'Feature', 
	      'Benefit' => 'Benefit'
	   );
	
	function getCMSFields() {
		$fields = new FieldSet (
			new SimpleTinyMCEField ('Feature','Feature'),
			new SimpleTinyMCEField ('Benefit','Benefit'), 
			new TextField ('URL','Link To More Information (URL)')
		);
		return $fields;
	}
	
}

?>