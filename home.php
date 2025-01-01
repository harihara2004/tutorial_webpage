

<html>

	<head>
		<title>RobustIntellect webpage Tutorial</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		
		<link rel="stylesheet" href="css/ls.css"/>

		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: #357;
  display: block
}

#myMenu li a:hover {
  background-color: #4565;
}
.vertical-menu {
  width: 150px;
  height: 500px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
</style>
</head>
	<body style="background:#3333" >
		

	
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
				<a><span style="color: white"class="navbar-brand" href>
      <img src="image/hy.jpg" alt="Logo" width="100" height="50" style="color: lightblue" class="d-inline-block align-text-top">
     Robust Intellect</span></a>
    <div class="container">


  <div class="container">
 <div> <ul class="nav navbar-nav navbar-left">

   <br>     
     <li><a href="home.php" ><span style="color: lightblue"class="btn btn-outline-light" type="submit" style="float:left">Home page</span></a></li>
<li><a href="index1.php?option=about1"><span style="color:lightyellow" class="btn btn-outline-light" type="submit" style="float:left">About</span></a></li>

 <!--  <li><a href="index1.php?option=FeesDetails"><span style="color:lightgray" class="btn btn-outline-light" type="submit" style="float:left">Fees details</a></li>-->

   </ul>




<ul class="nav navbar-nav navbar-right">
     
      <li><a href="index1.php?option=New_user"><span ><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="orangered" class="bi bi-person-fill-up" viewBox="0 0 16 16"><path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/> <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/><span  style="color:orangered" class="btn btn-outline-light" type="submit"
       style="float:left"> Sign Up</span></span></svg></a></li>
      <li><a href="index1.php?option=login">	<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="bisque" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg> <span style="color:bisque" class="btn btn" type="submit" style="float:left">Login</span>
      	</a>
      </li>
    </ul>


</div>
</div>
</nav>	

<br>
<br>
<br>
<br>
<div>

<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
<br><ul class="nav navbar-nav navbar-left">

<ul id="myMenu">
	<div class="row">
 
<div class="panel-body" style="background-color:#bbb;"><!-- #bbb,#eee-->
	<b><h2><span style="color: black"> MENU </span></b></h2>
	<div class="vertical-menu">
 <h3><b> <li><a href="home.php?option=HTML">HTML</a></li></b>
  <b><li><a href="home.php?option=CSS">CSS</a></li></b>
  <b><li><a href="home.php?option=java">JAVA</a></li></b>
  <b><li><a href="home.php?option=dbms">DBMS</a></li></b>
  <b><li><a href="home.php?option=sql">SQL</a></li></b>
  <b><li><a href="home.php?option=python_intro">PYTHON</a></li></b>
  <b><li><a href="home.php?option=rp">R</a></li></b>
  <b><li><a href="#">Bootstrap</a></li></b>
  <b><li><a href="#">Node.js</a></li>
</b></h3>
  </div>
</div>
</div>
</div>	
</ul>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-md">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="HTML")
			{
			include('html.php');
			}

			if($opt=="CSS")
			{
			include('csstutorial.php');
			}

			if($opt=="java")
			{
			include('javaintro.php');
			}
			if($opt=="dbms")
			{
			include('dbms.php');
			}
			if($opt=="sql")
			{
			include('sql.php');
			}
			if($opt=="python_intro")
			{
			include('python_intro.php');
			}
			if($opt=="rp")
			{
			include('rp.php');
			}

		}
		else
		{
		echo
		 "<b><h1><span style= color:red>PROBLEM </span>
		 <br>
	
		 The  Education System has its share of issues and challenges which need to be resolved to provide better and improved education to children, who are the future of the country. 
<span style= color:red>solution </span>
   Are you looking for specific educational courses in IT and other job-related fields? I can suggest online platforms, specific programs, or certifications depending on what you're interested in. This webpage create for codeing  tutorial .

		</b></h1>";
		}
		?>
		
		
		
		</div>
		</div>

	</div>
	<container>
		
		<div class="col-md">
			<div class="panel panel-default">
  <center><div class="panel-heading"><h4><b>LATEST OFFERS</b></h4></div></center>
  <div class="panel-body">
    <h4>This is the best website you are education to the next level</h4>
  </div>
</div>
		
		</div>
	</div>

</div>

</container>

<br/>
<br/>
<br/>
<br/>

<footer>

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li> <a href="http://www.RobustIntellect.com/">Robust Intellect</a></li>

      
	</ul>


</div>

</div>

</nav>
</footer>

	</body>
</html>
