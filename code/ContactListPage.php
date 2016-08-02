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

    /**
     * standard SS variable
     * @Var String
     */
    private static $plural_name = 'Contact List Pages';


}

public function ContactListPage_Controller extends Page_Controller
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
