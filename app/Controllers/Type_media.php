<?php
namespace App\Controllers;

use App\Models\TypemediaModel;
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Type_media extends BaseController
{
    // ...

    public function display($page = 'link')
    {
        if (! is_file(APPPATH . 'Views/type_media/Type_media_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        //$data['title'] = ucfirst($page); // Capitalize the first letter
        //$data['numero'] =123;

        return view('type_media/Type_media_' . $page );//$data : ['numero'=> 123]
    }


    public function find($code_type_media = false)
     {
        $model = model(TypemediaModel::class);

        $data['type_media'] = $model->getTypemedia($code_type_media);

        $page = 'detail';

        if (! is_file(APPPATH . 'Views/type_media/Type_media_' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        return view('type_media/Type_media_' . $page, $data); 
     
     }
    }   











//namespace App\Controllers;

//class Type_media extends BaseController
//{}
    //public function index(): string
    //{
      //  return view('type_media/lienTypeMedia');
    //}
   // public function add(): string
    //{
      //  return view('type_media/addTypeMedia');
    //}
    //public function liste(): string
    //{
      //  return view('type_media/listeTypeMedia');
    //}
//}
