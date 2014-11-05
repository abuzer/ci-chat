Codeiginter FB like Chat library
--------------------------------

http://anantgarg.com/2009/05/13/gmail-facebook-style-jquery-chat/ i have converted this chat to codeigniter library. to use in Codeigniter.



You must first create a mySQL table as below.
```
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  `from_name` varchar(100) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
```



How to use?
------------
Set the session variable:
```
@session_start();
if( !isset( $_SESSION['chatusername'] )  || !isset( $_SESSION['username'] )  ){
    $_SESSION['chatusername'] = 'User 2';
    $_SESSION['username'] = '2';
}
```

Add the following CSS to your page template
```
<link type="text/css" rel="stylesheet" media="all" href="css/chat/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/chat/screen.css" />
```

Add the following scripts to your page template
```
<script type="text/javascript" src="js/chat/jquery.js"></script>
<script type="text/javascript" src="js/chat/chat.js"></script>


And in the view
<span onclick="javascript:chatWith('2','User 2' )">chat with User 2</span>
```

Features
---------
1. Gmail style bottom right display of chat boxes
2. Keeps chat boxes open and stores state (data) even when pages are browsed/refreshed similar to Facebook
3. Displays “Sent at…” after 3 minutes of inactivity
4. Displays “X says…” & blinks chat boxes when window is not in focus
5. Minimize and close chat boxes
6. Auto-resize of text input box
7. Auto-scrolling of chat text
8. Auto-back-off polling policy (hits the server less-often when chat activity is low)
9. Extremely simple to integrate into existing site
