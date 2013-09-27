<?php
/**
* @version		$Id: helper.php 10381 2011-07-24 14:35:53Z gilbertr $
* @package		IMBII Imagecube
* @copyright	Copyright (C) 2006 - 2011 IMBII. All rights reserved.
* @license		Private use only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class imagecubeHelper {

	var $imageCount;

	// count all indie links
	function getImages($dir) {
		
		// calculate total number of images stored in the supplied folder
        $result	= null;
        
        // Ensure Sitepath is in fron of dir path
        $dir = JPATH_BASE.$dir;
        
        // Change to directory 
    	chdir($dir);
    
     	// Open directory; 
    	$handle = @opendir($dir) or die( "Directory \"$dir\"not found.");
    
     	// Loop through all TOP directory entries, construct  
     	// two temporary arrays containing files and sub directories from top level 
    	while($entry = readdir($handle)) 
    	{
        	if ($entry !=  ".." && $entry !=  "." && $entry != "index.html" && !is_dir($entry))
        	{   
            		$image_files[] = $entry;
        	}
        }

        sort($image_files);


		return $image_files;
	}
}
