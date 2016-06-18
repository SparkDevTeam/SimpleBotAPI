<?php
/*
  _________                       __    ________                        
 /   _____/______ _____  _______ |  | __\______ \    ____ ___  __ ______
 \_____  \ \____ \\__  \ \_  __ \|  |/ / |    |  \ _/ __ \\  \/ //  ___/
 /        \|  |_> >/ __ \_|  | \/|    <  |    `   \\  ___/ \   / \___ \ 
/_______  /|   __/(____  /|__|   |__|_ \/_______  / \___  > \_/ /____  >
        \/ |__|        \/             \/        \/      \/           \/ 

        This code is from SparkDev's(https://twitter.com/SparkDevTeam) SparkMessenger,
        developed by Aditya Kharote (https://twitter.com/Akharote1).
        You are allowed to use code in this file as long as you contribute to the 
        BotAPI by adding in more replies. Enjoy coding :)
*/
function contains($str, array $arr)	// Check if the String $str contains any of the values in Array $arr
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== false) return true;
    }
    return false;
}
function containsAll($str, array $arr)	// Check if the String $str contains all the values in Array $arr
{
    foreach($arr as $a) {
        if (stripos($str,$a) !== true) return false;
    }
    return true;
}
$greetings = array("hi","hello","sup");	// Array containing all words considered as greetings.
$input = $_GET['input']; // Get the input message from the HTTP Query
if($input!=NULL && $input!=""){
	if(contains($input,$greetings)){	// If the input contains any of the greeting messages then greet the user.
		echo "Hello there, I am SparkBot. Nice to meet you :D";
	}else if(containsAll($input,array("tell","joke"))){	// If the input contains 'tell' and 'joke' then tell a joke.
		// TODO: Add jokes :P
	}else{ // If the input couldn't be matched with a reply then:
		echo "Sorry, I could not quite get what you meant there :(";
	}
}else{ // If the input was empty then:
	echo "Sorry, I could not quite get what you meant there :(";
}
?>
