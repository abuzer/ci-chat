<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chat - CodeIgniter</title>
    <link type="text/css" rel="stylesheet" media="all" href="css/chat/chat.css" />
    <link type="text/css" rel="stylesheet" media="all" href="css/chat/screen.css" />
    <script type="text/javascript" src="js/chat/jquery.js"></script>
    <script type="text/javascript" src="js/chat/chat.js"></script>

    <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }
    #body{
        margin: 0 15px 0 15px;
    }
    
    #container{
        margin: 10px;
        border: 1px solid #D0D0D0;
        -webkit-box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>
<body>

<div id="container">
    <h1>CodeIgniter Chat!</h1>
    <h1>i am <?php echo $_SESSION['chatusername'] ?></h1>
    <div id="body">
      <p>  <span onclick="javascript:chatWith('2','User 2' )">chat with User 2</span> </p>
    </div>
</div>

</body>
</html>