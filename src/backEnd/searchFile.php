<?php 
    function searchFile()
    {
        $dir = "..".DIRECTORY_SEPARATOR."pathToSucess";
        $filename = "a.txt";
        $pathToFile = $dir.DIRECTORY_SEPARATOR.$filename;
        $content =  file_get_contents($pathToFile);
        return $content;
    }
?>