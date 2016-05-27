<head>
	<style>
		table {
			border-collapse: collapse;
			width: 30%;
		}

		th, td {
			text-align: left;
			padding: 40px;
		}				
	</style>

	<script>
		function select(id)
		{
			var corners = ["1", "3", "7", "9"];
			var sides = [2, 4, 6, 8];

			if (document.getElementById(id).style.backgroundColor == 'red')
			{
				alert('Invalid Selection');
			}

			else
			{
				document.getElementById(id).style.backgroundColor = 'red';
				
				if (corners.indexOf(id) >= 0)
				{
					if (document.getElementById(5).style.backgroundColor == 'blue')
					{
						for (var i=0;i<sides.length;i++)
						{							
							if ((document.getElementById(sides[i]).style.backgroundColor != 'red') ||
								(document.getElementById(sides[i]).style.backgroundColor != 'blue'))
							{
								delay(function()
								{document.getElementById(sides[i]).style.backgroundColor = 'blue'; }, 1000 );
								break;
							}
						}
					}
					
					else
					{
						delay(function()
						{document.getElementById(5).style.backgroundColor = 'blue'; }, 1000 );					
					}					
				}				
			}			
		}

		var delay = ( function() {
			var timer = 0;
			return function(callback, ms) {
				clearTimeout (timer);
				timer = setTimeout(callback, ms);
			};
		})();
	</script>
</head>

<body>
<center>
	<table border=1>
		<tr>
			<td id="1" onClick="select(this.id);">1</td>
			<td id="2" onClick="select(this.id);">2</td>
			<td id="3" onClick="select(this.id);">3</td>
		</tr>
		<tr>
			<td id="4" onClick="select(this.id);">4</td>
			<td id="5" onClick="select(this.id);">5</td>
			<td id="6" onClick="select(this.id);">6</td>
		</tr>
		<tr>
			<td id="7" onClick="select(this.id);">7</td>
			<td id="8" onClick="select(this.id);">8</td>
			<td id="9" onClick="select(this.id);">9</td>
		</tr>
	</table>
</center>
</body>