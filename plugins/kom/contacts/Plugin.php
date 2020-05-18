<?php namespace Kom\Contacts;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

      return [

        'Kom\Contacts\Components\ContactForm' => 'Contact_us',
      ];
    }

    public function registerSettings()
    {
    }

    public function registerReportWidgets(){

      return [

        'Kom\Contacts\ReportWidgets\RecentContacts' => [
          'label' => 'recent contacts',
          'context' => 'dashboard'
        ],
      ];

    }
}
