<?php

namespace Sunnysideup\ContactList\Model;

use Sunnysideup\TitleDataObject\Model\TitleDataObject;

class ContactCategory extends TitleDataObject
{
    private static $table_name = 'ContactCategory';

    private static $belongs_many_many = [
        'Contacts' => Contact::class,
    ];

    private static $field_labels = [
        'Title' => 'Category',
    ];

    private static $summary_fields = [
        'Title' => 'Category',
    ];

    private static $singular_name = 'Contact Category';

    private static $plural_name = 'Contact Categories';
}
