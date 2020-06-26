<?php

namespace Sunnysideup\ContactList\Cms;


use Sunnysideup\ContactList\Model\Contact;
use Sunnysideup\ContactList\Model\ContactLocation;
use Sunnysideup\ContactList\Model\ContactCategory;
use SilverStripe\Admin\ModelAdmin;



class ContactModelAdmin extends ModelAdmin
{
    private static $managed_models = array(
        Contact::class,
        ContactLocation::class,
        ContactCategory::class
    );

    private static $url_segment = 'Contact';

    private static $menu_title = 'Contacts';
}

