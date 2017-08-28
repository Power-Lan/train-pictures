<?php

namespace pl\trains;

class Picture
{
    /*
     *  Return the list of picture as a key/value array with train name as key and filepath as value
     */
    static function getList()
    {
        $out = array();

        $files = glob(__DIR__ . '/../img/*.jpg');
        foreach($files as $file) {
            $name = basename($file, '.jpg');
            $out[$name] = realpath($file);
        }

        return $out;
    }
}
