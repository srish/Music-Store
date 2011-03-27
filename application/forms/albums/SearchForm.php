<?php 
class SearchForm extends Zend_Form
{
    public function __construct($options = null)
    {
    	parent::__construct($options);
        $this->setName('searchalbum');
    	
    	$type = new Zend_Form_Element_MultiCheckbox('type', array(
	    'multiOptions' => array(
		'pop' => 'pop',
		'jazz' => 'jazz',
		'rock' => 'rock',
		)
		));

        $type->setLabel('Album Type :')
             ->setRequired(true);
       
        $gender = new Zend_Form_Element_Radio('gender');
        $gender->setLabel('Gender :')
               ->SetRequired(true);
        $gender->addMultiOption('male', 'male');
        $gender->addMultiOption('female','female');
        
        $instr = new Zend_Form_Element_Select('instr');
        $instr->setLabel('Instrument :')
              ->setRequired(true);
        $instr->addMultiOption('','Select...');
        $instr->addMultiOption('guitar','guitar');
        $instr->addMultiOption('violin','violin');
        $instr->addMultiOption('vocals','vocals');
        $instr->addMultiOption('drums','drums');
       
        $submit = new Zend_Form_Element_Submit('Search');
        $submit->setAttrib('id', 'search');
        
        $this->addElements(array($type,$gender,$instr,$submit));
      }
 }
