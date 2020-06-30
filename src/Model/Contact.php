<?php

namespace Sunnysideup\ContactList\Model;

use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataObject;

class Contact extends DataObject
{
    private static $table_name = 'Contact';

    private static $db = [
        'FirstName' => 'Varchar(50)',
        'Surname' => 'Varchar(50)',
        'Email' => 'EmailAddress',
        'BusinessName' => 'Varchar(50)',
        'Website' => 'Varchar(50)',
        'IsProfessional' => 'Boolean',
        'IsVisible' => 'Boolean',
        'IsHighlighted' => 'Boolean',
        'Reference' => 'Varchar(50)',
    ];

    private static $has_one = [
        'Location' => ContactLocation::class,
    ];

    private static $many_many = [
        'Type' => ContactCategory::class,
    ];

    private static $summary_fields = [
        'Title' => 'Name',
        'BusinessName' => 'BusinessName',
    ];

    private static $field_labels = [
        'LocationID' => 'Locationnnn',
    ];

    private static $searchable_fields = [
        'Email' => 'PartialMatchFilter',
        'FirstName' => 'PartialMatchFilter',
        'Surname' => 'PartialMatchFilter',
        'BusinessName' => 'PartialMatchFilter',
        'Website' => 'PartialMatchFilter',
        'IsProfessional' => 'ExactMatchFilter',
        'IsVisible' => 'ExactMatchFilter',
        'IsHighlighted' => 'ExactMatchFilter',
        'Reference' => 'PartialMatchFilter',
    ];

    /**
     * @inherited
     */
    private static $casting = [
        'Title' => 'Varchar',
    ];

    /**
     * @inherited
     */
    private static $default_sort = [
        'BusinessName' => 'ASC',
    ];

    private static $singular_name = 'Contact';

    private static $plural_name = 'Contacts';

    /**
     * @return string
     */
    public function Title()
    {
        return $this->getTitle();
    }

    public function getTitle()
    {
        return implode(' ', [$this->FirstName, $this->Surname]);
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
