<?php 
    require("searchFile.php");
    function createArrayUsingContent($content)
    {
        $stepByStep = explode(",",$content);
        foreach ($stepByStep as $key => $value) {
            $moduleCode = $stepByStep[0];
            $pathToSucess[] = $value;
        }
        return $pathToSucess;
    }
?>