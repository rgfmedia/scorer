<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM commu where com_id='$get'");

				while($row = mysql_fetch_array($result))
				  {
				  $category=$row['title'];
				  $mnu=$row['sender'];
				  $date=$row['date'];
				  }
?>
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
<form action="editcomexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Title<br />
   <input name="category" type="text" class="ed" id="category" value="<?php echo $category; ?>" /><input name="id" type="hidden" class="ed" id="category" value="<?php echo $get; ?>" />
  <br />

  Sender <br />
    <input name="mnu" type="text" id="mnu" class="ed" value="<?php echo $mnu; ?>" />
    <br />
  Date<br />
  	<input type="text" name="date" class="tcal" value="<?php echo $date; ?>" />
  <br />

 Content: <br />
 <input type="file" name="image" class="ed"><br />

    <input type="submit" name="Submit" value="save" id="button1" />

</form>
