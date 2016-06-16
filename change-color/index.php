<!doctype html>
<html lang=en>
<head>
<meta charset=utf-8>
<title>Change Color</title>
<link rel="stylesheet" href="change.css" type="text/css">
<script>
function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

function change_color(element) {
    var r = getRandomArbitrary(0,256);
    var g = getRandomArbitrary(0,256);
    var b = getRandomArbitrary(0,256);
    var newcolor = "rgb(" +r+ "," +g+ "," +b+ ")";
    document.body.style.backgroundColor = newcolor;
}

function setup() {
    document.getElementById('click').onclick = change_color;
}

window.onload = setup;
</script>
</head>
<body>
<div><button type="button" name="button" id="click">Click me for a new color!</button></div>
</body>
</html>
