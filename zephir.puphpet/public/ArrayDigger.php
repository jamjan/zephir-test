<?php

class ArrayDigger
{
    public function extract_data($resource_data,$path, $delimiter = ".") {
        $path_exploded = explode($delimiter,$path);
        if ( ! empty($path_exploded)) {
            $copy = $resource_data;
            foreach($copy as $key=>$value) {
                if(isset($copy[$key])) {
                    $copy = $copy[$key];
                } else {
                    return null;
                }
            }
            return $copy;
        } else {
            return null;
        }
    }
}