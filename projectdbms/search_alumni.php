<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Alumni</title>
<link rel="stylesheet" href="css/index.css" />
<?php
include_once"setting/search_navigation.php";
?>
</head>
<?php
include_once "connect_database.php";
?>
<style>
	
.dropbtn {
    background-color: white;
    color: #red;
    padding: 5px 116px;
    font-size: 15px;
	border: 2px #050119;
    cursor: pointer;
}

input.i1{
padding: 3px 119px;
    font-size: 20px;
}
	
</style>
<body>
<form class="mt-5" action="search_result2.php" method="post">
  <div class="container">
    <h3 class="text-center mb-4">Search Via Anyone of the following:</h3>
    <div class="row justify-content-center">
      <div class="col-sm-6 mb-3">
        <label for="pid" class="form-label">Name</label>
        <input type="text" class="form-control" id="pid" name="pid" placeholder="Enter Name">
      </div>
      <div class="col-sm-6 mb-3">
        <label for="aid" class="form-label">Registration Number</label>
        <input type="text" class="form-control" id="aid" name="aid" placeholder="Enter Registration Number">
      </div>
      <div class="col-sm-6 mb-3">
        <label for="pp" class="form-label">Branch</label>
        <select class="form-select" id="pp" name="pp">
          <option></option>
          <option>CSE</option>
          <option>ECE</option>
          <option>EE</option>
          <option>AIEI</option>
          <option>FOOD</option>
          <option>MECH</option>
          <option>IT</option>
        </select>
      </div>
      <div class="col-sm-6 mb-3">
        <label for="sp" class="form-label">Session</label>
        <select class="form-select" id="sp" name="sp">
          <option></option>
          <option>2005-2009</option>
          <option>2006-2010</option>
          <option>2007-2011</option>
          <option>2008-2012</option>
          <option>2009-2013</option>
          <option>2010-2014</option>
          <option>2011-2015</option>
          <option>2012-2016</option>
          <option>2013-2017</option>
          <option>2014-2018</option>
          <option>2015-2019</option>
          <option>2016-2020</option>
        </select>
      </div>
      <div class="col-sm-12 mb-3 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
</body>
	


</html>