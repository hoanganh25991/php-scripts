<?php
if(!function_exists('link')){ // Assume a windows system
    function link($target, $link){
        if(is_dir($target)){
            // junctions link to directories in windows
            exec("junction64 $link $target", $lines, $val);
            return 0 == $val;
        }elseif(is_file($target)){
            // Hardlinks link to files in windows
            exec("fsutil hardlink create $link $target", $lines, $val);
            return 0 == $val;
        }
        
        return false;
    }
}
?>