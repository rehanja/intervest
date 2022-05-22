<!DOCTYPE html>
<html lang="en">
<head>
<title>INTEVEST</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ddd;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}
</style>
</head>
<body>

  <div class="topnav">
    <a href="http://127.0.0.1:8000/home">DASHBOARD</a>
    <a href="http://127.0.0.1:8000/help">ENTER DATA</a>
    <a href="http://127.0.0.1:8000/report">COVID-19 STAT REPORT</a>
  </div>

  @foreach($helps as $help)
    <div class="content">
      <h1>{{$help->name}}</h1>
      <h3>{{$help->date}}</h3>
      <p>{{$help->post}}</p>
      <a href={{$help->link}}>Click here to visit link</a>
    </div>
    <br>
  @endforeach

  <div class="footer">
    <p>INTERVEST ASSIGNMENT</p>
  </div>
</body>
</html>


