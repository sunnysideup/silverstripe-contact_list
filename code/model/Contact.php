<?php

class Contact extends DataObject
{
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
