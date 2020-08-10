<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>::Search Record::</title>
	<style type="text/css">
		.container{
  		height: 100%;
  		width: 100%;
  		border: 1px solid black;
  		text-align: center;
  		margin: :0px auto;

  	}
  	#keystr{
  		width: 200px;
  	}
  	#loadrecords
  	{
  		width: 200px;
  		height: auto;
  		background-color: powderblue;
  		border: 1px solid lightgray;
        margin:0px auto;
  	}
	</style>
</head>
<body>
	<div  class="container">
		<h2>Search Employee</h2><hr>
	Search Employee:<input type="radio" name="search" value="general" onclick="optioncheck()">General
	<input type="radio" name="search" value="advanced" onclick="optioncheck()">advanced
	<br><br>
	<div id="general_div" style="display: none;">
		Search Record:&nbsp;&nbsp;&nbsp;<input type="text" name="keyname" placeholder="emp name,Email">
		<input type="submit" value="Search">
	</div>
	<div id="advanced_div"  style="display: none;">
		<input type="text"  placeholder="Start typing name.."  id="keystr" onkeydown="searchrecord();">
		<div id="loadrecords">
			
		</div>
	</div>
	</div>
</body>
	<script>
		function optioncheck()
		{
			var search=document.getElementsByName('search');
			// search option Tag Name
			var general=search[0].value;
			//alert(general);
			var general=search[1].value;

			if(search[0].checked==true)
			{
				var general_div=document.getElementById('general_div');
				general_div.style.display="block";
				var advanced_div=document.getElementById('advanced_div');
				advanced_div.style.display="none";
			}
			else if(search[1].checked==true)

			{
				var advanced_div=document.getElementById('advanced_div');
				advanced_div.style.display="block";
				var general_div=document.getElementById('general_div');
				general_div.style.display="none";
			}
			else{

				console.log("please select a radio");
			}
		}

		function searchrecord()
		{
			var keystr=document.getElementById("keystr");
			var loadrecords=document.getElementById("loadrecords");
			var wordtyped=keystr.value;
			//loadrecords.innerHTML=wordtyped;
			loadrecords.innerHTML="<img src='images/search.gif' style='height:50px; width:50px;margin-left:50px;'>";

		if(wordtyped.length<2)	
		{
             
		}
	}
	</script>
</html>