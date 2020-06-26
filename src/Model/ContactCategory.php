<?php

namespace Sunnysideup\ContactList\Model;


use Sunnysideup\ContactList\Model\Contact;
use Sunnysideup\TitleDataObject\Model\TitleDataObject;



class ContactCategory extends TitleDataObject
{

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * OLD: private static $belongs_many_many = (case sensitive)
  * NEW: 
    private static $table_name = '[SEARCH_REPLACE_CLASS_NAME_GOES_HERE]';

    private static $belongs_many_many = (COMPLEX)
  * EXP: Check that is class indeed extends DataObject and that it is not a data-extension!
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
    
    private static $table_name = 'ContactCategory';

    private static $belongs_many_many = array(
        'Contacts' => Contact::class
    );

    private static $field_labels = array(
        'Title' => 'Category'
    );

    private static $summary_fields = array(
        'Title' => 'Category'
    );
    

    private static $singular_name = 'Contact Category';

    private static $plural_name = 'Contact Categories';
}

