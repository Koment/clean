<?php namespace Kom\Order;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [

        'Kom\Order\Components\Orderform' => 'Order_form'
      ];
    }

    public function registerSettings()
    {
    }

    public function registerReportWidgets() {

      return [

        'Kom\Order\ReportWidgets\RecentOrders' => [

          'label' => 'Recent orders',
          'context' => 'dashboard'
        ],

      ];
    }

}
