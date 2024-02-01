<?php

namespace App\Controllers;

class Timeline extends BaseController
/*{
    public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    public function list(): string
    {
        return view('timeline/timeline_list');
    }
    public function add(): string
    {
        return view('timeline/timeline_add');
    }
}*/
 {   
   public function index(): string
    {
        return view('timeline/timeline_menu');
    }
    
    public function display(): string
     { 
        $page = 'menu';

        if (! is_file(APPPATH . 'Views/timeline/timeline_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return display('timeline/timeline_' .$page);
     }
 }    
    
    