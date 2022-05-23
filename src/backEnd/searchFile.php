<?php 
    function searchFile($dir,$filename)
    {
        $pathToFile = $dir.DIRECTORY_SEPARATOR.$filename;
        $content =  file_get_contents($pathToFile);
        return $content;
    }
    echo searchFile("..".DIRECTORY_SEPARATOR."pathToSucess","a.txt");
?>