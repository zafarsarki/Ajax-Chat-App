<?php require_once "session.php";//session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            /* margin-top: 10; */
        }

        h1 {
            font-family: cursive;
            color: white;
            padding: 0;
            margin: 0;
            color: tomato;
        }

        #heading {
            background-color: black;
            text-align: center;
        }

        span {
            float: right;
        }

        a {
            text-decoration: none;
            background-color: tomato;
            padding: 10px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
        }
        
        #msg_section {
            border: 2px solid tomato;
            width: 70%;
            margin-left: 10px;
            height: 60vh;
            border-radius: 0px 20px;
            float: left;
            overflow-y: scroll;
        }
        
        #online_users {
            border: 2px solid tomato;
            width: 25%;
            margin-right: 5px;
            height: 60vh;
            border-radius: 20px 0px;
            float: right;
            overflow-y: scroll;
        }

        #send_msg {
            width: 50%;
            height: 30px;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 20px;
            border: 2px solid tomato;
            outline: none;
        }

        #send_btn {
            background-color: tomato;
            padding: 10px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="heading">
        <h1>Group Chat Box</h1>
    </div>
    <span><a href="logout.php">LOGOUT</a></span>
    <h3 style="margin-left: 10px;"><?php echo "Welcome: " . $_SESSION['user']['full_name']; ?></h3></span>

    <div id="msg_section"></div>
    <div id="online_users"></div>

    <input type="text" id="send_msg" placeholder="Type Message">
    <button id="send_btn" onclick="send_msgs()">Send Message</button>

    <?php


    ?>
    <script>
        send_msgs();
        // show_online_users();
        setInterval(function(){ show_msgs();show_online_users(); }, 1000);
        function show_msgs() {
            var obj;
            if (window.XMLHttpRequest) {
                obj = new XMLHttpRequest;
            } else {
                obj = new ActiveXObject('Microsoft.XMLHttp');
            }
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById('msg_section').innerHTML = obj.responseText;
                }
            }
            obj.open('POST', 'show_msgs_ajax_process.php');
            obj.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            obj.send();
        }

        function send_msgs() {
            var obj;
            var msg = document.getElementById('send_msg').value;
            if (msg != '') {
                if (window.XMLHttpRequest) {
                    obj = new XMLHttpRequest;
                } else {
                    obj = new ActiveXObject('Microsoft.XMLHttp');
                }
                obj.onreadystatechange = function() {
                    if (obj.readyState == 4 && obj.status == 200) {
                        document.getElementById('send_msg').value = '';
                    }
                }
                obj.open('POST', 'send_msgs_ajax_process.php');
                obj.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                obj.send('action=send_msg&msg='+msg);
            }
        }

        function show_online_users() {
            var obj;
            if (window.XMLHttpRequest) {
                obj = new XMLHttpRequest;
            } else {
                obj = new ActiveXObject('Microsoft.XMLHttp');
            }
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById('online_users').innerHTML = obj.responseText;
                }
            }
            obj.open('POST', 'show_online_users_process.php');
            obj.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            obj.send();
        }

        
    </script>
</body>

</html>