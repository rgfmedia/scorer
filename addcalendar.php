
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
<form action="addcalendarexec.php" method="post" enctype="multipart/form-data" name="addroom" onSubmit="return validateForm()">

School Year
    <input name="title" type="text" id="title" class="ed form-control" size="35" placeholder="School Year" required />
   

File:
 <input type="file" name="image" class="ed form-control" required>


    <input type="submit" name="Submit" value="save" class="btn btn-md btn-primary pull-right" />

</form>
