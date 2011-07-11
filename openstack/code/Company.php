<?php
	
class Company extends DataObject {

	static $db = array(
		'Name' => 'Text',
		'URL' => 'Text',
		'DisplayOnSite' => 'Boolean',
		'Featured' => 'Boolean',
		'Description' => 'HTMLText'
	);
	
	static $has_one = array(
		'CompanyListPage' => 'CompanyListPage',
		'Logo' => 'Image',
		'Submitter' => 'Member'
	);
	
	static $singular_name = 'Company';
	static $plural_name = 'Companies';
	
	static $summary_fields = array( 
	      'Name' => 'Company', 
	      'URL' => 'URL',
	      'DisplayNice' => 'Display' 
	   );
	
	function getCMSFields() {
		$fields = new FieldSet (
			new TextField('Name','Company Name'),
			new TextField ('URL','Company Web Address (URL)'),
			new CheckboxField ('DisplayOnSite','List this company on openstack.org'),
			new CheckboxField ('Featured','Include this company in featured companies area'),
			new TextField ('Description','Short discription of this company (optional - displayed for a featured company)'),
			new ImageField('Logo', 'Logo', Null, Null, Null, 'logos')
		);
		return $fields;
	}
	
	//Generate Yes/No for DOM / Complex Table Field 
	public function DisplayNice() { 
	   return $this->DisplayOnSite ? 'Yes' : 'No'; 
	}	

}

?>