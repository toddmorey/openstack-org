<?php
class Page extends SiteTree {

	public static $db = array(
		'IncludeJquery' => 'Boolean',
		'PageJavaScript' => 'Text',
		'PageCSS' => 'Text',
		'IncludeShadowBox' => 'Boolean',
	);

	public static $has_one = array(
	);
		
	public function InPast($fieldname) {
	    return $this->$fieldname < date('Y-m-d H:i:s');
	}
	
	public function InFuture($fieldname) {
  	  return $this->$fieldname > date('Y-m-d H:i:s');
	}
	
	public function TimeRightNow() {
	    return date('Y-m-d H:i:s');
	}
	
	function getCMSFields() {
	     $fields = parent::getCMSFields();
	     
	     $fields->addFieldToTab('Root.Content.Metadata', new TextField ('PageCSS','Custom CSS File For This Page (must be in CSS directory)'));
	     
		 $fields->addFieldToTab('Root.Content.Metadata', new CheckboxField ('IncludeJquery','Include JQuery In This Page'));
		 
		 $fields->addFieldToTab('Root.Content.Metadata', new CheckboxField ('IncludeShadowBox','Include ShadowBox Javascript and CSS'));
		
		 $fields->addFieldToTab('Root.Content.Metadata', new TextareaField ('PageJavaScript','Custom JavaScript For This Page'));
		 		 		 
	     return $fields;
	 }
	 	 		
}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);
	
	public function DateSortedChildren(){ 
	   $children = $this->Children(); 
	   if(!$children) 
	      return null; 
	          
	   $children->sort('EventStartDate', 'DESC');
	   return $children; 
	}

	public function init() {
		parent::init();

	}
	
	// This handy little hack makes Silverstipe embed the Javascript as HTML (rather than text on the page)
	public function EmbedJavaScript(){
		$field = new HTMLText();
		$field->setValue($this->PageJavaScript);
		return $field;
	}
	
	public function IncludePageCSS(){
		$filename = Director::baseFolder().'/themes/openstack/css/'.$this->URLSegment.'.css'; 
		if (file_exists($filename)) {
			$CSSToInclude = '<link rel="stylesheet" href="/themes/openstack/css/'.$this->URLSegment.'.css" type="text/css" media="screen, projection, print">'; 
			return $CSSToInclude;
		}
	}
	
	
	
	public function IncludePageJavascript(){
		global $filePathToSiteRoot;
		$filename = Director::baseFolder().'/themes/openstack/javascript/'.$this->URLSegment.'.js'; 
		
		if (file_exists($filename)) { 
			return file_get_contents($filename);
		}
	}	
	
}