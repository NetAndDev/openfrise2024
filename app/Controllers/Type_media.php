<?php
namespace App\Controllers;

use App\Models\TypemediaModel;
use CodeIgniter\Exceptions\PageNotFoundException; // Add this line

class Type_media extends BaseController
{
    public function display($page = 'link')
    {
        if (! is_file(APPPATH . 'Views/type_media/Type_media_' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }
        
        $MonModel = model('TypemediaModel');
      
        $data = [
            'chart' => $MonModel->getTypemedia(),
            'dell' => $MonModel->dell(array (
                'code_type_media',
                'label',
                'icon',
                'icon_ori',
                'comment',
                'date_create',
                'date_update',
                
            )),
            'daily' => $MonModel->daily(array (
                'code_type_media',
                'label',
                'icon',
                'icon_ori',
                'comment',
                'date_create',
                'date_update',
                
            ))
        ];
          
        return view('type_media/Type_media_'.$page, $data);
    }
}
