<html>
<head>
	<title>Giải phương trình bậc 2</title>
	<script type="text/javascript">
	function GPT()
	{

		var nghiem1="x1=";
		var nghiem2="x2=";
		var x1, x2;
		var a, b, c, delta;

		var a=parseFloat(document.getElementById("a").value);
		var b=parseFloat(document.getElementById("b").value);
		var c=parseFloat(document.getElementById("c").value);

		delta=(b*b-4*a*c);
		if(a==0)
		{
			alert('Không phải là phương trình bậc 2');
		}
		else if (delta==0)
		{
			alert('phương trình có nghiệm kép:');
			x1=-b/2*a;
			x2=-b/2*a;
			document.getElementById("x").value = nghiem1 + eval(x1);
			document.getElementById("y").value = nghiem2 + eval(x2);
		}

		else if (delta<0)
		{
			alert('Phương trình vô nghiệm');
		}

		else
		{
			alert('Phương trình có 2 nghiệm phân biệt:');
			x1=(-b-Math.sqrt(delta))/(2*a);
			x2=(-b+Math.sqrt(delta))/(2*a);
			document.getElementById("x").value = nghiem1 + eval(x1.toFixed(3));
			document.getElementById("y").value = nghiem2 + eval(x2.toFixed(3));
		}
	}
	</script>
</head>
<body>
<center>
<div
	<div Giải Phương trình bậc 2</font></div>
	<div>
	<table>
		<tr>
			<td class="hleft">Phương trình:</td>
			<td class="hright"><input type="text" id="a" size="5px"> x<sup>2</sup> +
			<input type="text" id="b" size="5px"> x +
			<input type="tex" id="c" size="5px"> = 0</td>
		</tr>
		<tr>
			<td class="hleft">Nghiệm:</td>
			<td class="hright"><input type="text" id="x" size="13px"  value="">
			<input type="text" id="y" size="14px"  value=""></td>
		</tr>
		<tr>
			<td colspan="2" height="60px"><input type="button" id="giai" value="Giải phương trình" onclick="GPT();"></td>
		</tr>
	</table>
	</div>
</div>
</center>
</body>
</html>
