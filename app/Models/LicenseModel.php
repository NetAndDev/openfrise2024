<?php

namespace app\Models;

use CodeIgniter\Model;

class LicenseModel extends Model{

    protected $table = "LICENSES";

 // la ligne a ajouté
 protected $allowedFields = ['code_license', 'title', 'filename', 'filename_ori', 'icon', 'icon_ori',
 'comment'];
// voir si le probleme vient pas de code_license?
    public function getLicense($id=false){ 

        if($id===false){
            return $this->findAll();
        }
    
        return $this->where(['code_license' => $id])->first();
    }
}

?>
