<!DOCTYPE html>
<html lang="en">
<head>
<title>Show/Hide image with jQuery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#btn1').on("click",function(e){
   $('#myImg').toggle('slow');
  });
});
</script>
</head>
<body>
    <div>
  <img src="image.png" alt="Show/Hide Image" id="myImg"/>
  <button type="button" id="btn1">Show/Hide Image</button>
    </div>
</body>
</html>