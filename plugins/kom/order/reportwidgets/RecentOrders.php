<?php namespace Kom\Order\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

use Kom\Order\Models\Order;

use Exception;

class RecentOrders extends ReportWidgetBase
{

  protected $defaultAlias = 'recentorders';

  public function render()
  {

    try{

      $this->getRecentOrders();

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
            'default'           => 'Recent orders',
            'type'              => 'string',
            'validationPattern' => '^.+$',
            'validationMessage' => 'The Widget Title is required.'
        ],

      'number' => [
            'title'             => 'Number of orders to show',
            'default'           => '7',
            'type'              => 'string',
            'validationPattern' => '^[0-9]+$'
        ]

      ];
  }


  private function getRecentOrders(){

    // where('viewed', 0)->

    $this->vars['lastOrders'] = Order::take($this->property('number'))->orderBy('created_at', 'DESC')->get();
  }



}
