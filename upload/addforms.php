
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script>
<form action="addformsexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">
  Title<br />
    <input name="title" type="text" id="title" class="ed" size="50" />
    <br />
 User:
 	<select name="combo" id="combo" class-"ed">
 	<option>Teacher</option>
 	<option>Student</option>
 	</select></br>
<!-- <input name="combo" type="text" class="ed" id="combo" size="50" />
 <?php
include('config.php');
$name= mysql_query("select * from departments");

echo '<select name="txtCombo"  id="txtCombo" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysql_fetch_assoc($name))
{

echo '<option>';
echo $res['department'];
echo'</option>';
}
echo'</select>';



?>

 <input name="button" type="button" style="cursor:pointer;" onClick="addCombo()" value="Add" id="button1" />
 -->

 Content: <br />
 <input type="file" name="image" class="ed"><br />


    <input type="submit" name="Submit" value="save" id="button1" />

</form>