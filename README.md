🇬🇧 English

This project is a simple PHP program for managing a list of movies with title and rating. You can add movies, remove them, sort by rating, and display the top-rated movie.

🔹 Features

Add a movie

addMovie($movies, "The Count of Monte Cristo", 10);


Remove a movie

removeMovie($movies,"Dead Silence");


Sort movies by rating

sortByRating($movies);


Show the top movie

showTopMovie($movies);

🔹 How to Use

Clone or download the repository:

git clone <url-of-repo>


Run the PHP file:

php movies.php


Note: The PHP file cannot be run by double-clicking. You need PHP CLI or a server.

🔹 Sample File
$movies=[['title'=>"The Hunter", 'rating'=>8],
         ['title'=>"Dead Silence",'rating'=>7],
         ['title'=>"The Anaconda",'rating'=>5],
         ['title'=>"Kapodistrias",'rating'=>8]
         ];
addMovie($movies, "The Count of Monte Cristo", 10);
removeMovie($movies,"Dead Silence");
sortByRating($movies);
showTopMovie($movies);
