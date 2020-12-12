<html>
<head>
</head>
<body>
<script type="text/javascript">
function changeThis(){
    var formInput = document.getElementById('theInput').value;
    document.getElementById('newText').innerHTML = formInput;

}
</script> 
You wrote: <input type="text" value=<span id="newText"></span>> <br>
<br>
<?php

    echo $stri = addslashes("<span id='newText'></span>");



?>
<input type='text' id='theInput' value='Write here' onChange='changeThis()' />
</body>
</html>