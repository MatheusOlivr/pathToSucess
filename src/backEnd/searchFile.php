<?php 
    function searchFile($filename)
    {
        $dir = "..".DIRECTORY_SEPARATOR."pathToSucess";
        $pathToFile = $dir.DIRECTORY_SEPARATOR.$filename;
        $content =  file_get_contents($pathToFile);
        return $content;
    }
?>