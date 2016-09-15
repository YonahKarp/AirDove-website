<!DOCTYPE html>



<?php
include("./header.php");
?>


<div class="indent">
    <p>Comments?, Questions?, ¿Preguntas? shoot us an email below!<br /></p>

    <form action="sendEmail.php" method="post">
        <label for="email">Email Address:</label>
        <input id="email" type="text" name="email" placeholder="your email">
        <br/>
        <textarea name="textArea" rows="5" cols="30" wrap="soft">  </textarea>
        <br/>
        <input type="submit" name="submitButton" value="send"/>
    </form>



</div>
<?php
include("./footer.php");
?>



