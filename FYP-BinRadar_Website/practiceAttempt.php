<!DOCTYPE html>
<html>
<head>
<style> 
#main {
  width: 200px;
  height: 200px;
  border: 1px solid #c3c3c3;
  display: flex;
  flex-flow: row wrap;
  gap: 10px;
}

#main div {
  width: 50px;
  height: 50px;
  
}
</style>
</head>
<body>

<h1>The flex-flow Property</h1>

<div id="main">
  <div style="background-color:coral;">A</div>
  <div style="background-color:lightblue;">B</div>
  <div style="background-color:khaki;">C</div>
  <div style="background-color:pink;">D</div>
  <div style="background-color:lightgrey;">E</div>
  <div style="background-color:lightgreen;">F</div>
</div>

<p><b>Note:</b> Internet Explorer 10 and earlier versions do not support the flex-flow property.</p>

</body>
</html>