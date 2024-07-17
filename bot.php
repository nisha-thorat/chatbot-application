<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Application for students</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/emoji-mart/css/emoji-mart.css" />

</head>
<body>

    
    <div class="wrapper">
        <div class="title">
 <i class="fa-solid fa-robot"></i>

            <b>CHATBOT</b>
        </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <!-- You can replace the user icon with an emoji here -->
                    <i class="icon">🤖</i>
                </div>
                <div class="msg-header">
                    <!-- You can use emojis in your messages -->
                    <p>👋 Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type your message here..." required>
                <button id="emoji-picker-btn">😀</button> <!-- Emoji picker button -->
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="icon"><i class="icon">👤</i></div> <div class="msg-header"><p>'+ $value +'</p><span class="time-right">'+ getCurrentTime() +'</span></div></div>';

                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="icon">🤖</i></div><div class="msg-header"><p>'+ result +'</p><span class="time-right">'+ getCurrentTime() +'</span></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });

        function getCurrentTime() {
    var today = new Date();
    var hours = today.getHours();
    var minutes = today.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // Handle midnight (0 hours)
    minutes = minutes < 10 ? '0' + minutes : minutes; // Add leading zero if minutes are less than 10
    var time = hours + ':' + minutes + ' ' + ampm;
    return time;
}
    </script>
    <button id="send-btn" ><a href="logout.php"><font color="blue">BACK</font></a>
</body>
</html>
