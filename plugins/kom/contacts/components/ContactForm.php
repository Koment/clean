<?php

namespace Kom\Contacts\Components;

use Cms\Classes\ComponentBase;

// use Mail;

use Input;

use Kom\Contacts\Models\Contact;

use Validator;

use Redirect;

use Carbon\Carbon;

use Flash;


class ContactForm extends ComponentBase {

  public function componentDetails () {

    return [

      'name' => 'Contact Form',

      'description' => 'Contact form'

    ];
  }


  public function onSend () {

    $validator = Validator::make(

      [

        'name' => Input::get('name'),

        'email' => Input::get('email'),

        'content' => Input::get('content'),

      ],

      [

        'name' => 'required',

        'email' => 'required|email',

        'content' => 'required',

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

      $contact = new Contact();

      $contact->name = Input::get('name');
      $contact->email = Input::get('email');
      $contact->message = Input::get('content');

      $contact->created_at = new Carbon('now');

      $contact->save();

      Flash::success('THX for youre appeal!');

      return Redirect::back();

    }
  }



}
