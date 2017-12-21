<?php

namespace InfyOm\Generator\Generators;

use InfyOm\Generator\Utils\FileUtil;

class BaseGenerator
{
    public function rollbackFile($path, $fileName)
    {
        $arr = explode('/',$path);
        if(!in_array('migrations',$arr)){
            if (file_exists($path.$fileName)) {
                return FileUtil::deleteFile($path, $fileName);
            }
        }


        return false;
    }
}
