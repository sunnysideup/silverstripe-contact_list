<?php

class Contact extends DataObject {

    private static $db = array(
        'FirstName' => 'Varchar(50)',
        'Surname' => 'Varchar(50)',
        'Email' => 'Varchar(50)',
        'BusinessName' => 'Varchar(50)',
        'Website' => 'Varchar(50)',
        'IsProfessional' => 'Boolean',
        'IsVisible' => 'Boolean',
        'IsHighlighted' => 'Boolean',
        'Reference' => 'Varchar(50)'
    );

    private static $has_one = array (
        'Location' => 'ContactLocation',
    );

    private static $many_many = array (
        'Type'  => 'ContactCategory'
    );

    private static $summary_fields = array(
        'Title' => 'Name',
        'BusinessName' => 'BusinessName'
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
    function Title(){ return $this->getTitle();}
    function getTitle(){
        return implode(' ', array($this->FirstName, $this->Surname));
    }

}
