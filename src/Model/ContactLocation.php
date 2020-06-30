<?php

namespace Sunnysideup\ContactList\Model;

use Sunnysideup\TitleDataObject\Model\TitleDataObject;

class ContactLocation extends TitleDataObject
{
    private static $table_name = 'ContactLocation';

    private static $has_many = [
        'Contacts' => Contact::class,
    ];

    private static $field_labels = [
        'Title' => 'Location',
    ];

    private static $summary_fields = [
        'Title' => 'Location',
    ];

    /**
     * @inherited
     */
    private static $default_sort = [
        'Title' => 'ASC',
    ];

    private static $singular_name = 'Location';

    private static $plural_name = 'Locations';
}
