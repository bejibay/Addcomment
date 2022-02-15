<form method ="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF'];?>">
<div>
<h2>Add Comments </h2>
<label for="name">Name<label/>
<input type ="text" name ="name">
<label for="email">Email<label/>
<input type ="text" name ="email">
<label for="website">Website<label/>
<input type ="text" name ="website" >
<label for="comments">Comments<label/>
<textarea name ="comments"></textarea>
<input type ="hidden" name ="pageurl" value="<?php echo $_GET['pageurl'];?>"> 
<input type ="hidden" name ="ip" value="<?php echo $_SERVER['REMOTE_ADDR'];?>"> 
<input type ="date" name="pubdate" >
</div>
<input type ="submit" name ="postcomments" value ="Submit Comments">
<input type ="reset" name ="cancel" value ="Cancel">
</form>
