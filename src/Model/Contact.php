<?php

namespace Sunnysideup\ContactList\Model;

use DataObject;
use DropdownField;


class Contact extends DataObject
{

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * OLD: private static $db (case sensitive)
  * NEW: 
    private static $table_name = '[SEARCH_REPLACE_CLASS_NAME_GOES_HERE]';

    private static $db (COMPLEX)
  * EXP: Check that is class indeed extends DataObject and that it is not a data-extension!
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
    
    private static $table_name = 'Contact';

    private static $db = array(
        'FirstName' => 'Varchar(50)',
        'Surname' => 'Varchar(50)',
        'Email' => 'EmailAddress',
        'BusinessName' => 'Varchar(50)',
        'Website' => 'Varchar(50)',
        'IsProfessional' => 'Boolean',
        'IsVisible' => 'Boolean',
        'IsHighlighted' => 'Boolean',
        'Reference' => 'Varchar(50)'
    );

    private static $has_one = array(
        'Location' => 'ContactLocation',
    );

    private static $many_many = array(
        'Type'  => 'ContactCategory'
    );

    private static $summary_fields = array(
        'Title' => 'Name',
        'BusinessName' => 'BusinessName'
    );

    private static $field_labels = array(
        'LocationID' => 'Locationnnn'
    );

    private static $searchable_fields = array(
        'Email' => 'PartialMatchFilter',
        'FirstName' => 'PartialMatchFilter',
        'Surname' => 'PartialMatchFilter',
        'BusinessName' => 'PartialMatchFilter',
        'Website' => 'PartialMatchFilter',
        'IsProfessional' => 'ExactMatchFilter',
        'IsVisible' => 'ExactMatchFilter',
        'IsHighlighted' => 'ExactMatchFilter',
        'Reference' => 'PartialMatchFilter'
    );

    /**
     * @inherited
     */
    private static $casting = array(
        'Title' => "Varchar"
    );

    /**
     * @inherited
     */
    private static $default_sort = array(
        'BusinessName' => "ASC"
    );

    private static $singular_name = 'Contact';

    private static $plural_name = 'Contacts';

    /**
     * @return String
     */
    public function Title()
    {
        return $this->getTitle();
    }
    public function getTitle()
    {
        return implode(' ', array($this->FirstName, $this->Surname));
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSfields();
        $locationField = $fields->dataFieldByName('LocationID');
        $fields->replaceField(
            'LocationID',
            DropdownField::create('LocationID', $locationField->Title(), ContactLocation::get()->map())
        );
        return $fields;
    }
}

