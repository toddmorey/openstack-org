<?php
/**
 * Defines the PDF page type
 */
class PdfPage extends Page {
   static $db = array(
    	'Sidebar' => 'HTMLText',
    	'SubTitle' => 'Text'
	);
   static $has_one = array(
   );
   static $icon = "themes/tutorial/images/treeicons/news";
   
 	function getCMSFields() {
    	$fields = parent::getCMSFields();
    	
    	// create a couple of extra fields
    	$fields->addFieldToTab('Root.Content.Main', new TextField('SubTitle','Subtitle (tagline right below the title)'), 'Content');
    	$fields->addFieldToTab('Root.Content.Main', new HtmlEditorField('Sidebar','Right Sidebar Content'), '');
    	
    	// remove unneeded fields 
    	$fields->removeFieldFromTab("Root.Content.Main","MenuTitle");

    	return $fields;
 	}   
}
 
class PdfPage_Controller extends Page_Controller {
 
}
 
?>