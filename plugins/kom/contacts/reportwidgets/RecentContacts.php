<?php namespace Kom\Contacts\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

use Kom\Contacts\Models\Contact;

use Exception;

class RecentContacts extends ReportWidgetBase
{

  protected $defaultAlias = 'recentcontacts';

  public function render()
  {

    try{

      $this->getRecentContacts();

    }
    catch (Exception $ex) {

        $this->vars['error'] = $ex->getMessage();
    }

      return $this->makePartial('widget');
  }

  public function defineProperties(){

    return [

      'title' => [
            'title'             => 'Widget title',
            'default'           => 'Recent contacts',
            'type'              => 'string',
            'validationPattern' => '^.+$',
            'validationMessage' => 'The Widget Title is required.'
        ],

      'number' => [
            'title'             => 'Number of contacts to show',
            'default'           => '7',
            'type'              => 'string',
            'validationPattern' => '^[0-9]+$'
        ]

      ];
  }


  private function getRecentContacts(){

    // where('viewed', 0)->

    $this->vars['lastContacts'] = Contact::take($this->property('number'))->orderBy('created_at', 'DESC')->get();
  }



}
