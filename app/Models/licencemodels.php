<?php

namespace app\model;

use codeigniter\model;

class UserModel extends Model{

    protected $table = "License";
    public function getLicense($id=false){ 

        if($id===false){
            return $this->findall();
        }
    
        return $this->where([id_license==$id])->first();
        }
}
