<?php
class AddalbumForm extends Zend_Form
{
    public function __construct($options = null)
    {
    	parent::__construct($options);
        $this->setName('addalbum');
    
        $albumid = new Zend_Form_Element_Text('albumid');
        $albumid->setLabel('Album id : ')
		->setRequired(true)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->addValidators(array(
			array('Digits'),
			array('GreaterThan',false,array('min'=>0)),
			array('NotEmpty')
		     )
        );

	$albumname = new Zend_Form_Element_Text('albumname');
        $albumname->setLabel('Album Name : ')
		  ->setRequired(true)
		  ->addFilter('StripTags')
		  ->addFilter('StringTrim')        
		  ->addValidators(array(
			array('NotEmpty')
			)
        );
		
	$gender = new Zend_Form_Element_Radio('gender');
        $gender->setLabel('Gender')
               ->SetRequired(true);
        $gender->addMultiOption('male', 'male');
        $gender->addMultiOption('female','female');
       
         
        $instr = new Zend_Form_Element_Select('instr');
        $instr->setLabel('Instrument')
        ->setRequired(true);
        $instr->addMultiOption('','Select...');
        $instr->addMultiOption('guitar','guitar');
        $instr->addMultiOption('violin','violin');
        $instr->addMultiOption('vocals','vocals');
        $instr->addMultiOption('drums','drums');
        
        $type = new Zend_Form_Element_MultiCheckbox('type', array(
		    'multiOptions' => array(
			'pop' => 'pop',
			'jazz' => 'jazz',
			'rock' => 'rock',
			)
         ));
        $type->setLabel('Type')
             ->setRequired(true);

	
        $year = new Zend_Form_Element_Text('year');
        $year->setLabel('Year : ')
	     ->setRequired(true)
	     ->addFilter('StripTags')
	     ->addFilter('StringTrim')
	     ->addValidators(array(
		array('Digits'),
		array('GreaterThan',false,array('min'=>0)),
		array('NotEmpty')
		)
        );

	
	$file = new Zend_Form_Element_File('pic');
	$file->setLabel('Upload an image:')
		->setDestination('/var/www/albumzend/albums/upload');
	// ensure minimum 1, maximum 3 files
	$file->addValidator('Count', false, array('min' => 1, 'max' => 1));
	// limit to 100K
	$file->addValidator('Size', false, 102400);
	// only JPEG, PNG, and GIFs
	$file->addValidator('Extension', false, 'jpg,png,gif');
	// defines 3 identical files
	$file->setMultiFile(1);
	$file->setAttrib('enctype', 'multipart/form-data');

                
        $submit = new Zend_Form_Element_Submit('Add');
        $submit->setAttrib('id', 'add');
        
        $this->addElements(array($albumid,$albumname,$type,$gender,$instr,$year,$type,$file,$submit));
      }
 }
