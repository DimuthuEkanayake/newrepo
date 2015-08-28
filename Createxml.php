<?php

header("Content-type: text/xml");

$doc = new DOMDocument( );
    $root = $doc->createElement('Books');
    $doc->appendChild( $root );
    
    for($i=0;$i<=2;$i++){
    
    $ele = $doc->createElement( 'Book' );
    $root->appendChild( $ele );
    $ti = $doc->createElement('Title');
    $ti->nodeValue = 'PHP Basics';
    $ele->appendChild( $ti );
    $au = $doc->createElement('Author');
    $au->nodeValue = 'James';
    $ele->appendChild( $au );
    $pr = $doc->createElement('Price');
    $pr->nodeValue = '2000';
    $ele->appendChild( $pr );
    }

    $doc->save('newxml.xml');
  
  echo $doc->saveXML();
  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

