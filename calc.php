<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Calculator</title>
<link rel="shortcut icon" href="sys.calc.png?rev=<?=time();?>" type="image/x-icon">
<style>
@font-face {
    font-family: "libsans";
    src: url("libsans.ttf");
}
body {
    background-color: #dcdad5;
    color: #000;
    font-family: "libsans";
    font-size: 14pt;
}
input {
    background-color: #fff;
    color: #000;
    font-family: "libsans";
    font-size: 14pt;
}
.top {
    border: none;
    position: absolute;
    width: 98%;
    height: 15%;
    top: 0%;
}
.panel {
    border: none;
    position: absolute;
    width: 96%;
    height: 82%;
    top: 15%;
    overflow-y: scroll;
}
.inputPanel {
    background-color: #fff;
    color: #000;
    border: none;
    text-align: center;
    position: relative;
    font-family: "libsans";
    font-size: 16pt;
    overflow-x: scroll;
    width: 90%;
    height: 40%;
}
.outputPanel {
    background-color: #fff;
    color: #000;
    border: none;
    text-align: center;
    position: relative;
    font-family: "libsans";
    font-size: 16pt;
    overflow-x: scroll;
    width: 90%;
    height: 40%;
}
.actionButton {
    background-color: #fff;
    color: #000;
    font-size: 16pt;
    width: 29px;
    position: relative;
}
</style>
<script src="jquery.js"></script>
<script src="base.js"></script>
<script src="nerdamer.js"></script>
<script src="algebra.js"></script>
<script src="calculus.js"></script>
<script src="solve.js"></script>
<script>
window.onload = function() {
    document.getElementById('calc').focus();
}
function calculate() {
    var input = document.getElementById('calc').value;
    document.getElementById('inputPanel').value = input;
    var calc = input;
    if (calc.includes('x')) {
        var solve = nerdamer.solve(calc, 'x');
        var result = eval(solve);
    } else if (calc.includes('?')) {
        var expdel = calc.split('?');
        var leftpart = eval(expdel[0]);
        var rightpart = eval(expdel[1]);
        if (leftpart > rightpart) {
            var result = leftpart + '>' + rightpart;
        } else if (leftpart < rightpart) {
            var result = leftpart + '<' + rightpart;
        } else if (leftpart == rightpart) {
            var result = leftpart + '==' + rightpart;
        }
    } else {
        var result = eval(calc);
    }
    var output = result;
    document.getElementById('calc').value = output;
    document.getElementById('outputPanel').value = output;
    return output;
}
</script>
</head>
<body>
<div class='top'>
<p align="center">
<input style="width:70%;" type="text" id="calc" placeholder="Enter the math expression" value="" onkeydown="if (event.keyCode == 13) {
    calculate();
}">
<input id='calcButton' class='actionButton' title="Calculate" type="button" value="=" onclick="calculate(); calc.focus();">
<input id='clearButton' class='actionButton' title="Clear" type="button" value="O" onclick="calc.value = ''; inputPanel.value = ''; outputPanel.value = ''; calc.focus();">
<input id='exitButton' class='actionButton' title="Exit" type="button" value="X" onclick="window.location.href = 'index.php';">
</p>
</div>
<div class='panel'>
<p align='center'><input id='inputPanel' class='inputPanel' title="Input" type="button" value="" onclick="calc.value=this.value;"></p>
<p align='center'><input id='outputPanel' class='outputPanel' title="Output" type="button" value=""  onclick="calc.value=this.value;"></p>
</div>
</body>
</html>
