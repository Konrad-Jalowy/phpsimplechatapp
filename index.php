<?php
ini_set('xdebug.max_nesting_level', 60000);
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 1;
require 'core/classes/Core.php';
require 'core/classes/Chat.php';

$chat = new Chat();
?>
<html>
    <head>
        <title>AJAX Chat</title>
        <link rel="stylesheet" href="css/style.css"></link>
    </head>
    <body>
        <div class="chat">
            <div class="messages"></div>
            <textarea class="entry" placeholder="Type here and press RETURN"></textarea>
        </div>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/chat.js"></script>
    </body>
</html>