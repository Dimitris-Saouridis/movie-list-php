<?php
$movies=[['title'=>"The Hunter", 'rating'=>8],
         ['title'=>"Dead Silence",'rating'=>7],
        ['title'=>"The Anaconda",'rating'=>5],
        ['title'=>"Kapodistrias",'rating'=>8]
         ];
function addMovie(&$movies, $title, $rating){
  $movies[]=['title'=> $title, 'rating'=>$rating];
  echo"Η ταινία με το τίτλο $title και με rating $rating προστήθετε στον πίνακα - λίστα.<br><br>";
}
function removeMovie(&$movies, $title){
  $flag=false;
  foreach($movies as $index=>$item){
    if(strtolower($item['title'])==strtolower($title)){
      unset($movies[$index]);
      $flag=true;
      echo " Αφαιρέθηκε η ταινία με τίτλο $title απο την λίστα -  τον πίνακα.<br><br>";
    }
  }
  if (!$flag){
    echo "Δεν βρέθηκε η ταινία με τίτλο $title στον πίνακα - την λίστα movies.<br>br>";
  }
$movies=array_values($movies);  
}
function sortByRating(&$movies){
  usort($movies,function($a,$b){
    return $a['rating'] <=>$b['rating']; 
  });
  foreach($movies as $items){
    echo "Η ταινία με τίτλο {$items['title']} - και με rating {$items['rating']}<br>";
  }
}  
function showTopMovie($movies){
  $max=0;
  $maxTitle="";
  foreach($movies as $item){
    if ($max<$item['rating']){
      $max=$item['rating'];
      $maxTitle=$item['title'];
	}
  }
  echo "<br>Η καλύτερη ταινία με το μεγαλύτερο rating ειναι $maxTitle με rating $max.";
}  
addMovie($movies, "The Count of Monte Cristo", 10);
removeMovie($movies,"Dead Silence");
echo "Οι ταινιες με αυξουσα σείρα by rating <br>";
sortByRating($movies);
showTopMovie($movies)

?>