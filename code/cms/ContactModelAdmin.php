<?php

class ContactModelAdmin extends ModelAdmin
{
    private static $managed_models = array(
        'Contact',
        'ContactLocation',
        'ContactCategory'
    );

    private static $url_segment = 'Contact';

    private static $menu_title = 'Contacts';
}
