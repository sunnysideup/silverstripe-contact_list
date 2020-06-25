<?php

class ContactLocation extends TitleDataObject
{

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * OLD: private static $has_many = (case sensitive)
  * NEW: 
    private static $table_name = '[SEARCH_REPLACE_CLASS_NAME_GOES_HERE]';

    private static $has_many = (COMPLEX)
  * EXP: Check that is class indeed extends DataObject and that it is not a data-extension!
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
    
    private static $table_name = 'ContactLocation';

    private static $has_many = array(
        'Contacts' => 'Contact'
    );

    private static $field_labels = array(
        'Title' => 'Location'
    );

    private static $summary_fields = array(
        'Title' => 'Location'
    );


    /**
     * @inherited
     */
    private static $default_sort = array(
        'Title' => "ASC"
    );

    private static $singular_name = 'Location';

    private static $plural_name = 'Locations';
}

