<?php

class ContactCategory extends TitleDataObject
{
    private static $belongs_many_many = array(
        'Contacts' => 'Contact'
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

