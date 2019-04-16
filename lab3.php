<?php 

// CANT GET CODE FROM DISPLAYING THE PREVIOUS SELECT IT FLIP FLOPS AND ALTERNATES. THE DISPLAY VALUES ARE WHAT THE COOKIES VALUES WERE BEFORE THE SUBMIT THEN THE VALUES CHANGE AFTER THE SUBMIT MAKING THE VALUES FLIP FLOP AND DISPLAY THE PREVIOUS COOKIES DATA


function StickySelectCookie($value, $selectName, $cookie){
 
    if (isset($_POST["$selectName"])){

        $checker = $_COOKIE["$cookie"];
       

        if ($checker == $value){

        echo "selected";

        }

    }

}








    if(isset($_POST['country'])){
    setcookie('country',$_POST['country'], time() + 7200);

    }


    if(isset($_POST['state'])){
    setcookie('state',$_POST['state'], time() + 7200);
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>
CANT GET CODE FROM DISPLAYING THE PREVIOUS SELECT IT FLIP FLOPS. <br><br> THE DISPLAY VALUES ARE WHAT THE COOKIES VALUES WERE BEFORE THE SUBMIT THEN THE VALUES CHANGE AFTER THE SUBMIT MAKING THE VALUES FLIP FLOP AND DISPLAY THE PREVIOUS COOKIES DATA

</h2>
<form action="lab3.php" method="post">
<select name="country" id="country">
<option value="united_states" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('united_states', 'country', 'country');}?>>United States</option>
<option value="GB" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('GB', 'country', 'country');}?>>Great Britain</option>
<option value="china" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('china', 'country', 'country');}?>>China</option>
<option value="canada" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('canada', 'country', 'country');}?>>Canada</option>
<option value="mexico" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('mexico', 'country', 'country');}?>>Mexico</option>
</select>
<br>
<br>
<select name="state" id="state">
<option value="WA" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('WA', 'state', 'state');}?>>WA</option>
<option value="OR" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('OR', 'state', 'state');}?>>OR</option>
<option value="VA" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('VA', 'state', 'state');}?>>VA</option>
<option value="NY" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('NY', 'state', 'state');}?>>NY</option>
<option value="NV" <?php if($_SERVER['REQUEST_METHOD']=="POST"){StickySelectCookie('NV', 'state', 'state');}?>>NV</option>
</select>
<br>
<br>





<button type="submit">submit</button>



</form>




</body>
</html>