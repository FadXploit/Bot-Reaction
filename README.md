///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
##
PHP Script Bot Reaction 
##
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
##
No Need Username and Password
Using Access Token only
##
<pre>
1.Upload Script to CPanel
</pre>
##
<pre>
2.Input your Access Token from any apps in FADXPL017_Token.txt 
or
Create index.php to Post "token" with action "FADXPL017_Submit.php
it's easy for saving access token
</pre>
##
<pre>
3.Change Type Reaction
Edit FADXPL017_TypeReaction.txt change "LIKE" with {LIKE,LOVE,HAHA,WOW,SAD,ANGRY} 
not work for {THANKFUL,PRIDE}
select 1 only 
</pre>
##
<pre>
4.Test Your bot by execute FADXPL017_BotReaction.php from Web Browser
if you got This Warning "Invalid Argument" is meaning your Access Token is Wrong or Expired 
you can regenerate Access Token then submit again
</pre>
##
<pre>
5.Create Cron
Create Cron FADXPL017_BotReaction.php for auto reacting
Recommended : 2 Minutes 
</pre>
##
