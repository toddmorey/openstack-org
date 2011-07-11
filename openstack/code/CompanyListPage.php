<?php
	class CompanyListPage extends Page {
		static $db = array(
		);
		static $has_one = array(
	     );
		static $has_many = array(
			'Companies' => 'Company'
		);
	     
	    function getCMSFields() {
	    	$fields = parent::getCMSFields();
	    	$companiesTable = new DataObjectManager($this, 'Companies', 'Company');
	    	$fields->addFieldToTab('Root.Content.Companies',$companiesTable);
	    	return $fields;
		}
	}

	class CompanyListPage_Controller extends Page_Controller {
		function init() {
			parent::init();
		}
		function DisplayedCompanies() {
			$DisplayedCompanies = DataObject::get("Company","DisplayOnSite = TRUE");
			$DisplayedCompanies->sort('ID');
			return $DisplayedCompanies;
		}
		function MostRecent() {
			$DisplayedCompanies = DataObject::get("Company","DisplayOnSite = TRUE");
			$DisplayedCompanies->sort('Created');
			$MostRecent = $DisplayedCompanies->Last();
			return $MostRecent;
		}
		function Featured() {
			$FeaturedCompanies = DataObject::get("Company","Featured = TRUE");
			return $FeaturedCompanies;
		}
		
	}
	
	
	
?>