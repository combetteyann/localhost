<?php


//get the list of seasons available in ../
$directory = '..';

function getSubdirectories($path)
{
    $subdirectories = array_filter(glob($path . '/*'), 'is_dir');
    return $subdirectories;
}

$seasonFolders = getSubdirectories($directory);

if (isset($_GET['seasonid'])) {

    $sFolder = $_GET['seasonid']; 

    $daysPath = "../$sFolder/";
    $dayFolders = getSubdirectories($daysPath);
    
    if (isset($_GET['dayid'])) {

        $dFolder = $_GET['dayid']; 

        $exosPath = "../$sFolder/$dFolder";
        $exosFolders = getSubdirectories($exosPath);
    }
}
