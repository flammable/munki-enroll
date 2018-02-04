<?php

require_once('cfpropertylist-2.0.1/CFPropertyList.php');

// Get the varibles passed by the enroll script
$hostname   = $_GET["hostname"];

// Check if manifest already exists for this machine
if ( file_exists( '../manifests/' . $hostname ) )
    {
        echo "Computer manifest already exists.";
    }
else
    {
        echo "Computer manifest does not exist. Will create.";

        // Create the new manifest plist
        $plist = new CFPropertyList();
        $plist->add( $dict = new CFDictionary() );
        
        // Add manifest to release catalog by default
        $dict->add( 'catalogs', $array = new CFArray() );
        $array->add( new CFString( 'release' ) );
        
        // Add manifests
        $dict->add( 'included_manifests', $array = new CFArray() );
        $array->add( new CFString( 'manifest1' ) );
        $array->add( new CFString( 'manifest2' ) );
        
        // Save the newly created plist
        $plist->saveXML( '../manifests/' . $hostname );
        
    }

?>