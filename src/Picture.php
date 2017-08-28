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

        if ($dh = opendir(__DIR__ . '/../img/')) {
            while (($file = readdir($dh)) !== false) {
                if (substr($file, -4) === '.jpg') {
                    $filename = substr($file, 0, -4);
                    $out[$filename] = __DIR__ . '/../img/' . $file;
                }
            }

            closedir($dh);
        }

        return $out;
    }
}
