<form method ="post" action ="<?php htmlspecialchars($_SERVER['PHP_SELF'];?>">
<div>
<label for="name">Name<label/>
<input type ="text" name ="name">
<label for="email">Email<label/>
<input type ="text" name ="email">
<label for="website">Website<label/>
<input type ="text" name ="website" >
<label for="comments">Comments<label/>
<textarea name ="comments"></textarea>
<input type ="hidden" name ="ip" value="<?php echo $_SERVER['REMOTE_ADD"];?>"> 
<input type ="date" name="pubdate" >
</div>
<input type ="submit" name ="submit" value ="Submit Comments">
<input type ="reset" name ="cancel" value ="Cancel">
</form>
