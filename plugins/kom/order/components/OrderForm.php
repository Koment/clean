<?php

namespace Kom\Order\Components;

use Cms\Classes\ComponentBase;

// use Mail;

use Input;

use Kom\Cleantype\Models\Cleantype;

use Kom\Order\Models\Order;

use Validator;

use Redirect;

use Carbon\Carbon;

use Flash;


class OrderForm extends ComponentBase {

  public function componentDetails () {

    return [

      'name' => 'Order Form',

      'description' => 'simple Order form'

    ];
  }


  public function onSend () {

    $validator = Validator::make(

      [

        'cleantype' => Input::get('cleantype'),

        'date' => Input::get('date'),

        'palce' => Input::get('place'),

        'area' => Input::get('area'),

        'phone' => Input::get('phone'),

      ],

      [

        'cleantype' => 'required',

        'date' => 'required',

        'palce' => 'required',

        'area' => 'required',

        'phone' => 'required',

      ]

    );

    if ($validator->fails()){

      return Redirect::back()->withErrors($validator->messages()->all());


    } else {

      // $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('conent')];

      // Mail::send('Kom.contacts::mail.message', $vars, function ($message){
      //
      //   $message->to('qwe@rty.sru', 'qwerty');
      //
      //   $message->subject('new message from contsct form');
      //
      // });

      $order = new Order();

      $order->cleantype = Input::get('cleantype');
      $order->date = Input::get('date');
      $order->place = Input::get('place');
      $order->area = Input::get('area');
      $order->phone = Input::get('phone');

      $order->created_at = new Carbon('now');

      $order->save();

      Flash::success('THX for youre order!');

      return Redirect::back();

    }
  }

  private function getPlaces() {

    $this->page['types'] = Cleantype::lists('type'); // Inject some variable to the page
  }

  public function onRun() {

    $this->getPlaces();

    $this->addCss('/plugins/kom/order/assets/datePicker/css/bootstrap-datetimepicker.min.css');

    $this->addJs('/plugins/kom/order/assets/datePicker/js/bootstrap-datetimepicker.js');
    $this->addJs('/plugins/kom/order/assets/datePicker/js/locales/bootstrap-datetimepicker.ru.js');

  }

  public function onRender() {



  }



}
