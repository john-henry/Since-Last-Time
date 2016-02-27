<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Since_last_time {

    public $return_data = "";

    public function __construct()
    {
      $last_visit  = ee()->session->userdata('last_visit');
      $entrydate = ee()->TMPL->fetch_param('entry_date');
      $markup = ee()->TMPL->fetch_param('markup');

    if(strtotime($entrydate) > $last_visit ){
     $this->return_data = $markup;

    }


    }
}
