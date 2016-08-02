<?php

class ContactLocation extends DataObject {

    private static $db = array(
        'Title' => 'Varchar(50)',
    );

    private static $has_many = array (
        'Contacts' => 'Contact'
    );

    private static $field_labels = array(
        'Title' => 'Location'
    );

    private static $summary_fields = array(
        'Title' => 'Location'
    );

    private static $indexes = array(
        'Title' => 'unique("Title")'
    );

    private static $searchable_fields = array(
        'Title' => 'PartialMatchFilter'
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
