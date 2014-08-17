<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UrlController extends BaseController {


        // Add this:
    public function __construct()
    {
        $this->beforeFilter('apiauth');
    }
    // Edit this:
    public function index()
    {
        //return 'Hello, API';
        
        return Response::json(array(
            'error' => false,
            'users' => "users->toArray()"),
            200
        );
    }
}

?>
