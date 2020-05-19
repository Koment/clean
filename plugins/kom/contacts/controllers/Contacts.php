<?php namespace Kom\Contacts\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

use Redirect;
use Backend;

class Contacts extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kom.Contacts', 'main-menu-item');
    }

    // public function create(){
    //
    //   // return Redirect::back();
    // }
    //
    // public function update(){
    //
    //   // return Redirect::back();
    //
    //   // return Redirect::to($this->makeRedirect('preview'));
    //   //
    //   // $id = $this->model->id;
    //   //
    //   // return Backend::redirect('preview/');
    //   //
    //   // $model = $this->config->modelClass;
    //   //
    //   // return $this->makeRedirect('preview', $this->model);
    // }

    
}
