<?php

namespace app\Models;

use CodeIgniter\Model;

class LicenseModel extends Model{

    protected $table = "LICENSES";

    public function getLicense($id=false){ 

        if($id===false){
            return $this->findAll();
        }
    
        return $this->where(['code_license' => $id])->first();
    }
}
?>