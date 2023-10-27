<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>chat bot</h1>
  <form id="chat-form">
  <input type="text" id="user-input" placeholder="type message here...">
  <button type="submit">SEND</button>
</from>
<div id="chat-container">
  <div id="bot-response"></div>
</div>

<script>
  const chatForm=document.getElementById('chat-form');
  const userInput=document.getElementById('user-input');
  const botResponse=document.getElementById('bot-response');

  chatForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const userMessage=userInput.value;
    fetch(`chatbot.php?message=${encodeURIComponent(userMessage)}`)
    .then(response=> response.json())
    .then(data => {
      botResponse.textContent=data.response;
    });
    userInput.value= '';
  });
  </script>
</body>
</html>