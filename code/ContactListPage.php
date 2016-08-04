<?php


class ContactListPage extends Page
{

    private static $icon = 'contact_list/images/treeicons/ContactListPage';

    /**
     * @var String Description of the class functionality, typically shown to a user
     * when selecting which page type to create. Translated through {@link provideI18nEntities()}.
     */
    private static $description = "Shows a list of contacts";

    /**
     * standard SS variable
     * @Var String
     */
    private static $singular_name = 'Contact List Page';

    function i18n_singular_name() {
        return $this->Config()->get('singular_name');
    }

    /**
     * standard SS variable
     * @Var String
     */
    private static $plural_name = 'Contact List Pages';

    function i18n_plural_name() {
        return $this->Config()->get('plural_name');
    }

    function canCreate($member = null) {
        if(ContactListPage::get()->count() == 0) {
            return parent::canCreate($member);
        }
        return false;
    }

}

class ContactListPage_Controller extends Page_Controller
{

    function init()
    {
        parent::init();
        TableFilterSortAPI::include_requirements();
    }

    function Contacts()
    {
        return Contact::get()->filter(array('IsVisible' => 1));
    }

}
