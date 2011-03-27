<?php 
class DeleteForm extends Zend_Form
{
    public function __construct($options = null)
    {
    	parent::__construct($options);
        $this->setName('deletealbum');
                
        $submit_yes = new Zend_Form_Element_Submit('Yes');
        $submit_yes->setAttrib('id', 'Yes');
        $submit_no = new Zend_Form_Element_Submit('No');
        $submit_no->setAttrib('id', 'No'); 
        
        $this->addElements(array($submit_yes,$submit_no));
      }
 }
