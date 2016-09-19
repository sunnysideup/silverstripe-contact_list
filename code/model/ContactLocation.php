<?php

class ContactLocation extends TitleDataObject
{
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
