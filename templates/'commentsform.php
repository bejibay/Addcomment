<form method ="post" action ="insertComments.php">
<div>
<label for="name">Name<label/>
<input type ="text" name ="name">
<label for="email">Email<label/>
<input type ="text" name ="email">
<label for="website">Website<label/>
<input type ="text" name ="website" >
<label for="comments">Comments<label/>
<textarea name ="comments"></textarea>
<input type ="hidden" name ="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
<input type ="hidden" name ="pubdate" value>
<input type ="submit" name ="submit" value ="Submit Comments">
<label for="name">Name<label/>
</div>
<input type ="cancel" name ="cancel" value ="Cancel">
</form>
