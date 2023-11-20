<?php

// Include Simple HTML DOM library.
include "simple_html_dom.php";

// Functions
require "function.php";

// Functioning for the juujika-no-rokunin manga
function JuujikaNoRokunin()
{
    // Use Simple HTML DOM parser to fetch the HTML content of the page.
    $html = file_get_html("https://mangareader.to/juujika-no-rokunin-4340");

    // Select manga name
    $mangaName = $html->find(".manga-name", 0);

    // Get the text content of the HTML element for $mangaName
    $mangaNameText = $mangaName->plaintext;
    
    // Select the first li element
    $chapterDiv = $html->find("#en-chapters li", 0);

    // Get the plaintext content of the selected element.
    $latestChapter = html_entity_decode($chapterDiv->plaintext);

    // Check if the latest chapter title contains a chapter number.
    if (preg_match("/\d+/", $latestChapter, $match)) {
        // Extract the chapter number and store it in $latestChapterNumber.
        $latestChapterNumber = $match[0];

        // Gets latest chapter number in juujika-no-rokunin.txt
        $storedLatestChapterNumber = file_get_contents(
            dirname(__FILE__) . "/juujika-no-rokunin.txt"
        );

        // Remove the word Read from latest chapter.
        $latestChapter = str_replace("Read", "", $latestChapter);

        // Construct the URL for the specific chapter.
        $chapterURL =
            "https://mangareader.to/read/juujika-no-rokunin-4340/en/chapter-" .
            $latestChapterNumber;

        // Check if new chapter arrived by comparing numbers.
        if ($latestChapterNumber > $storedLatestChapterNumber) {
            if (abs($latestChapterNumber - $storedLatestChapterNumber === 2)) {

                // Select the first li element.
                $chapterDiv = $html->find("#en-chapters li", 1);

                // Get the plaintext content of the selected element.
                $missedChapter = html_entity_decode($chapterDiv->plaintext);

                // Extract number from the title.
                if (preg_match("/\d+/", $missedChapter, $match)) {

                    // Extract the chapter number and store it in $latestChapterNumber.
                    $missedChapterNumber = $match[0];

                    // Remove the word Read from latest chapter.
                    $missedChapter = str_replace("Read", "", $missedChapter);

                    // Send email about missed chapter
                    missedChapterJNK($mangaNameText, $missedChapter, $missedChapterNumber);
                }

                // Delay to have emails in old, new order instead of new, old.
                sleep(1);
            }

            // Send email about new chapter
            newChapterJNK($mangaNameText, $latestChapter, $latestChapterNumber);

            // Store latestchapter number into juujika-no-rokunin.txt
            file_put_contents(
                dirname(__FILE__) . "/juujika-no-rokunin.txt",
                $latestChapterNumber
            );
        }
    }
}

function kagurabachi()
{
    // Use Simple HTML DOM parser to fetch the HTML content of the page.
    $html = file_get_html("https://mangareader.to/kagurabachi-67139");

    // Select manga name
    $mangaName = $html->find(".manga-name", 0);

    // Get the text content of the HTML element for $mangaName
    $mangaNameText = $mangaName->plaintext;
    
    // Select the first li element
    $chapterDiv = $html->find("#en-chapters li", 0);

    // Get the plaintext content of the selected element.
    $latestChapter = html_entity_decode($chapterDiv->plaintext);

    // Check if the latest chapter title contains a chapter number.
    if (preg_match("/\d+/", $latestChapter, $match)) {
        
        // Extract the chapter number and store it in $latestChapterNumber.
        $latestChapterNumber = $match[0];

        // Gets latest chapter number in juujika-no-rokunin.txt
        $storedLatestChapterNumber = file_get_contents(
            dirname(__FILE__) . "/kagurabachi.txt"
        );

        // Remove the word Read from latest chapter.
        $latestChapter = str_replace("Read", "", $latestChapter);

        // Construct the URL for the specific chapter.
        $chapterURL =
            "https://mangareader.to/read/kagurabachi-67139/en/chapter-" .
            $latestChapterNumber;

        // Check if new chapter arrived by comparing numbers.
        if ($latestChapterNumber > $storedLatestChapterNumber) {
            if (abs($latestChapterNumber - $storedLatestChapterNumber === 2)) {
                
                // Select the first li element.
                $chapterDiv = $html->find("#en-chapters li", 1);

                // Get the plaintext content of the selected element.
                $missedChapter = html_entity_decode($chapterDiv->plaintext);

                // Extract number from the title.
                if (preg_match("/\d+/", $missedChapter, $match)) {
                    // Extract the chapter number and store it in $latestChapterNumber.
                    $missedChapterNumber = $match[0];

                    // Remove the word Read from latest chapter.
                    $missedChapter = str_replace("Read", "", $missedChapter);

                    // Send email about missed chapter
                    missedChapterKB($mangaNameText, $missedChapter, $missedChapterNumber);
                }

                // Delay to have emails in old, new order instead of new, old.
                sleep(1);
            }

            // Send email about new chapter
            newChapterKB($mangaNameText, $latestChapter, $latestChapterNumber);

            // Store latestchapter number into kagurabachi.txt
            file_put_contents(
                dirname(__FILE__) . "/kagurabachi.txt",
                $latestChapterNumber
            );
        }
    }
}
