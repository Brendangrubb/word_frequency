# **Word Frequency**
#### Brendan Grubb, 2/17/2017

&nbsp;
## Description
Word Frequency is an application created to demonstrate my ability to write specifications and execute tests based on those specs according to the principles of Behavior Driven Development. With this app, the user will be able to input a word and a string of words (be it a phrase, sentence, paragraph or otherwise). The app will return the frequency with which the inputted word appears in the inputted phrase.




&nbsp;
## Specifications

|Behavior|Input 1 // Input 2|Output|Explanation of Values|Simplest Way to Test Behavior|
|--------|-----|------|---------------------|-----------------------------|
| Program will recognize one word and another word as the same | "shiny" // "shiny" | 1 | These inputs were chosen because they are equal. This and all future outputs were chosen because they are simple numerical representations of the specified relationship between the first and second input | This behavior can be tested by comparing input 1 to input 2 |
| Program will recognize no occurrences of a word within a phrase | "shiny" // "boots of leather" | 0 | These inputs were chosen because they are a simple example of a word that does not occur in a phrase | This behavior can be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find one occurrence of a word within a phrase | "shiny" // "shiny boots of leather" | 1 | These inputs were chosen because there is only one occurrence of input 1 in input 2 | This behavior can also be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find all occurrences of word within a phrase | "shiny" // "shiny shiny shiny boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times | This behavior can also be tested by splitting input 2 into an array and comparing input 1 to each value in the input 2 array |
| Program will find all occurrences of word within a phrase regardless of case | "ShInY" // "shiny SHINY ShInY boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times but the case does not match 2 out of three times | This behavior can be tested by changing input one and input two to all lower case before splitting input 2 and comparing |
| Program will find all occurrences of word within a phrase regardless of punctuation | "ShInY" // "Shiny? Shiny! ..Shiny.. boots of leather" | 3 | These inputs were chosen because input 1 occurs in input 2 multiple times but each occurrence of input 1 in input 2 has adjacent punctuation | This behavior can be tested by searching input 2 and removing all occurrences of a predefined set of punctuation characters |


&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/word_frequency)
* Download the zip file via the green button
* Unzip the file and open the **_word_frequency-master_** folder
* Open Terminal, navigate to **_word_frequency-master_** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **_word_frequency-master_/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* PHPUnit
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Brendan Grubb

This software is licensed under the GPL license
