<?php

namespace Sunnysideup\ContactList;

use PageController;


use Sunnysideup\ContactList\Model\Contact;
use Sunnysideup\TableFilterSort\Api\TableFilterSortAPI;

class ContactListPageController extends PageController
{
    public function Contacts()
    {
        return Contact::get()->filter(['IsVisible' => 1]);
    }

    protected function init()
    {
        parent::init();
        TableFilterSortAPI::include_requirements(
            $tableSelector = '.tfs-holder',
            $blockArray = ['TableFilterSort.theme'],
            $jqueryLocation = '',
            $includeInPage = true,
            $jsSettings = '{serverConnectionURL: ""}'
        );
    }
}
