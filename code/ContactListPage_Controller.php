<?php

class ContactListPage_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
        TableFilterSortAPI::include_requirements(
            $tableSelector = '.tfs-holder',
            $blockArray = array('TableFilterSort.theme'),
            $jqueryLocation = '',
            $includeInPage = true,
            $jsSettings = '{serverConnectionURL: ""}'
        );
    }

    public function Contacts()
    {
        return Contact::get()->filter(array('IsVisible' => 1));
    }
}
