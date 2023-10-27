<?php 
$responses = [
    "hi"=>"hello! How can i assist you today?",
    "how are you"=>"i am fine, How can i help you",
    "what is your name"=>"my name is chat bot",
    "bye"=>"goodbye",
];

//get the user message from query parameter
$userMessage = isset($_GET['message']) ? $_GET['message'] : '';

//initialize default response
$botResponse= "i am sorry, I don't understand.";

//check if user message exist in the predefined response
if(array_key_exists($userMessage, $responses)){
    $botResponse=$responses[$userMessage];
}

//set the content type as json
header('Content-Type: application/json');

//return the bot response as json
echo json_encode(["response" => $botResponse]);