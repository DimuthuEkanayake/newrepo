
<?php


  $doc = new DOMDocument();
  $doc->load( 'newxml.xml' );
  
  $books = $doc->getElementsByTagName( "Book" );
  foreach( $books as $book )
  {
  $titles = $book->getElementsByTagName( "Title" );
  $title = $titles->item(0)->nodeValue;
  
  $authors = $book->getElementsByTagName( "Author" );
  $author = $authors->item(0)->nodeValue;
  
  $prices = $book->getElementsByTagName( "Price" );
  $price = $prices->item(0)->nodeValue;
  
  echo "$title - $author - $price\n";
  }
  

