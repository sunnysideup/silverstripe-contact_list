<?php

class ContactCategory extends DataObject {

    private static $db = array(
        'Title' => 'Varchar(50)',
    );

    private static $belongs_many_many = array (
        'Contacts' => 'Contact'
    );

    private static $field_labels = array(
        'Title' => 'Category'
    );

    private static $summary_fields = array(
        'Title' => 'Category'
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
    

    private static $singular_name = 'Contact Category';

    private static $plural_name = 'Contact Categories';
}
