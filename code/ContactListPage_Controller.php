<?php

class ContactListPage_Controller extends Page_Controller
{

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * OLD:     public function init() (ignore case)
  * NEW:     protected function init() (COMPLEX)
  * EXP: Controller init functions are now protected  please check that is a controller.
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
    protected function init()
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
