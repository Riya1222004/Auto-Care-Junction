<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>
<script>
function take_screenshot()
{
 html2canvas(document.body, {  
  onrendered: function(canvas)  
  {
    var img = canvas.toDataURL()
    $.post("save_screenshot.php", {data: img}, function (file){
	window.location.href =  "save_screenshot.php?file="+ file
    });
  }
 });
}
</script>
<body>
<div id="wrapper">
<div id="screenshot_div">
  <button type="button" onclick="take_screenshot()">Take Screenshot</button>
</div>
</div>
</body>
</html>