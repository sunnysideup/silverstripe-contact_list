<?php

namespace Sunnysideup\ContactList;

use Page;



use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Sunnysideup\ContactList\Model\Contact;

class ContactListPage extends Page
{
    private static $icon = 'contact_list/images/treeicons/ContactListPage';

    /**
     * @var string Description of the class functionality, typically shown to a user
     * when selecting which page type to create. Translated through {@link provideI18nEntities()}.
     */
    private static $description = 'Shows a list of contacts';

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

    private static $contacts_list_cache_key = null;

    public function i18n_singular_name()
    {
        return $this->Config()->get('singular_name');
    }

    public function i18n_plural_name()
    {
        return $this->Config()->get('plural_name');
    }

    public function canCreate($member = null, $context = [])
    {
        if (ContactListPage::get()->count() === 0) {
            return parent::canCreate($member);
        }
        return false;
    }

    public function ContactsListCacheKey()
    {
        if (! self::$contacts_list_cache_key) {
            self::$contacts_list_cache_key = 'CL_' . Contact::get()->max('LastEdited') . '_' . Contact::get()->count();
        }
        return self::$contacts_list_cache_key;
    }

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Contacts',
            GridField::create(
                'Contacts',
                'Contacts',
                Contact::get(),
                GridFieldConfig_RecordEditor::create()
            )
        );
        return $fields;
    }
}
