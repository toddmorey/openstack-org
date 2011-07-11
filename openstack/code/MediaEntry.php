<?php
	
class MediaEntry extends DataObject {

	static $db = array(
		'Title' => 'Text',
		'URL' => 'Text',
		'DisplayOnSite' => 'Boolean',
		'Description' => 'HTMLText',
		'AuthorFirstName' => 'Text',
		'AuthorLastName' => 'Text',
		'Date' => 'Date',
		"Type" => "Enum('Video, Whitepaper, Press Release, Presentation Slides, Article', 'Article')"
	);
	
	static $has_one = array(
		'MediaListPage' => 'MediaListPage',
		'Thumbnail' => 'Image'
	);
	
	static $singular_name = 'Media Entry';
	static $plural_name = 'Media Entries';
	
	static $summary_fields = array( 
	      'Title' => 'Title', 
	      'URL' => 'URL'
	   );
	
	function getCMSFields() {
		$fields = new FieldSet (
			new TextField('Title','Title'),
			new DropdownField ('Type','Media type',$this->dbObject('Type')->enumValues()),
			new TextField ('URL','Link To Media (URL)'),			
			new DateField ('Date','Media Date'),
			new CheckboxField ('DisplayOnSite','Display this item on openstack.org'),
			new TextField ('AuthorFirstName','Author First Name'),
			new TextField ('AuthorLastName','Author Last Name'),
			new TextField ('Description','Short discription of this media entry (optional)'),
			new ImageField('Thumbnail', 'Thumbnail', Null, Null, Null, 'media-thumbnails')
		);
		return $fields;
	}
	
}

?>