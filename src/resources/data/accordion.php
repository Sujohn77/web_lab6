<?php
$xmlstr = <<<XML
<xml version='1.0' standalone='yes'?>
<books>
 <book>
 <title>Interesting places</title>
 <plot>
 London is the perfect city for all fans of Harry Potter and his friends. Embark on a guided tour down Diagon Alley and find out in which Hogwarts house you belong.
 </plot>
 <success type="bestseller">4</success>
 <success type="bookclubs">9</success>
 </book>
 <book>
 <title>History of London</title>
 <plot>
 The city of London was founded by the Romans and their rule extended from 43 AD to the fifth century AD, when the Empire fell. During the third century, Londinium, the name given to the town by the Romans, had a population of 50,000, mainly due to the influence of its major port.
 </plot>
 <success type="bestseller">22</success>
 <success type="bookclubs">3</success>
 </book>
 <book>
 <title>Nation of people</title>
 <plot>
 The demography of London is analysed by the Office for National Statistics and data is produced for each of the Greater London wards, the City of London and the 32 London boroughs, the Inner London and Outer London statistical sub-regions
 </plot>
 <success type="bestseller">22</success>
 <success type="bookclubs">3</success>
 </book>
</books>
XML;
?>
<php
$xml = new SimpleXMLElement($xmlstr);
foreach ($xml->book as $book) {
    echo '<button class="accordion">'+$book->title+'</button>'
    echo '<div class="panel"><p>'+ $book->plot+ '</p></div>';
}
?>