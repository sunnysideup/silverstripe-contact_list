<?php

namespace Sunnysideup\ContactList\Cms;

use SilverStripe\Admin\ModelAdmin;
use Sunnysideup\ContactList\Model\Contact;
use Sunnysideup\ContactList\Model\ContactCategory;
use Sunnysideup\ContactList\Model\ContactLocation;

class ContactModelAdmin extends ModelAdmin
{
    private static $managed_models = [
        Contact::class,
        ContactLocation::class,
        ContactCategory::class,
    ];

    private static $url_segment = 'Contact';

    private static $menu_title = 'Contacts';
}
