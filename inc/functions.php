<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
    [
      "quote" => "When something is important enough, you do it even if the odds are not in your favor.",
      "source" => "Elon Musk",  
    ],
    [
        "quote" => "Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.",
        "source" => "Albert Einstein",
    ],
    [
        "quote" => "These aren't the droids you're looking for.",
        "source" => "Obi-Wan",
        "citation" => "Star Wars: Episode IV - A New Hope",
        "year" => "1977",
    ],
    [
        "quote" => "Hope is like the sun. If you only believe it when you see it you'll never make it through the night.",
        "source" => "Leia Organa",
        "citation" => "Star Wars: Episode VIII - The Last Jedi",
        "year" => "2017",
    ],
    [
        "quote" => "Never limit yourself because of others’ limited imagination; never limit others because of your own limited imagination.",
        "source" => "Mae Jemison",
    ],
    [
        "quote" => "It suddenly struck me that that tiny pea, pretty and blue, was the Earth. I put up my thumb and shut one eye, and my thumb blotted out the planet Earth. I didn’t feel like a giant. I felt very, very small.",
        "source" => "Neil Armstrong",
    ],
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array) {
    // Get length of array
    $arrayLength = (count($array) - 1);

    // Generate a random number between 0 and array length
    $randomNum = rand(0, $arrayLength);

    // Pick a quote based on random number which pulls a certain quotes index
    $randomQuote = $array[$randomNum];
    
    // Return that quote
    return $randomQuote;
}

// Create the printQuote funtion and name it printQuote
function printQuote($array) {

    // Assign array to variable
    $randomQuote = getRandomQuote($array);

    // Create empty string
    $htmlString = "";

    // Begin to build string out with quote items & HTML
    $htmlString .= '<p class="quote">' . $randomQuote["quote"] . '</p>';
    $htmlString .= '<p class="source">' . $randomQuote["source"];

    // Test whether quote includes citation and year
    if ( $randomQuote["citation"] ) {
        $htmlString .= '<span class="citation">' . $randomQuote["citation"] . '</span>';
    }

    if ( $randomQuote["year"] ) {
        $htmlString .= '<span class="year">' . $randomQuote["year"] . '</span>';
    }

    $htmlString .= '</p>';

    // Display completed HTML element
    echo $htmlString;
}


?>