<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Calculator</title>
<link rel="shortcut icon" href="sys.calc.png?rev=<?=time();?>" type="image/x-icon">
<link href="system.css?rev=<?=time();?>" rel="stylesheet">
<script src="jquery.js?rev=<?=time();?>"></script>
<script src="base.js?rev=<?=time();?>"></script>
<script src="nerdamer.js?rev=<?=time();?>"></script>
<script src="algebra.js?rev=<?=time();?>"></script>
<script src="calculus.js?rev=<?=time();?>"></script>
<script src="solve.js?rev=<?=time();?>"></script>
<script>
window.onload = function() {
    document.getElementById('calc').focus();
}
</script>
</head>
<body>
<div class='top'>
<p align="center">
<input style="width:70%;" type="text" id="calc" placeholder="Enter the math expression" value="" onkeydown="if (event.keyCode == 13) {
    calculate();
}">
<input id='calcButton' class='actionButton' type="button" value=">" onclick="calculate(); calc.focus();">
<input id='clearButton' class='actionButton' type="button" value="<" onclick="calc.value = ''; inputPanel.value = ''; outputPanel.value = ''; calc.focus();">
<input id='exitButton' class='actionButton' type="button" value="X" onclick="window.location.href = 'index.php';">
</p>
</div>
<div class='panel'>
<p align='center'><input id='inputPanel' class='inputPanel' title="Input" type="button" value="" onclick="calc.value=this.value;"></p>
<p align='center'><input id='outputPanel' class='outputPanel' title="Output" type="button" value=""  onclick="calc.value=this.value;"></p>
</div>
</body>
</html>
