<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Hebrew tools</title>
	<style type="text/css">
		body {
			background: #fcfcfc;
			font-family: sans-serif;
			padding-top: 50px;
			text-align: center;
		}
		
		a.block {
			background: #d0d0d0;
			border-radius: 20px;
			color: #000;
			display: inline-block;
			height: 300px;
			margin: 30px;
			position: relative;
			text-decoration: none;
			top: 0;
			width: 320px;
		}
		
		a.block img {
			max-height: 160px;
			max-width: 240px;
		}
		
		a.block .footer {
			background: #ddd;
			border-radius: 0 0 20px 20px;
			bottom: 0;
			height: 2em;
			left: 0;
			line-height: 2em;
			position: absolute;
			width: 100%;
		}
		
		a.block:hover .footer {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<a class="block" href="https://parse.hebrewtools.org/">
		<h1>Parse Trainer</h1>
		<img src="parse-trainer.png"/>
		<span class="footer">Go!</span>
	</a>
	<a class="block" href="https://clauses.hebrewtools.org/">
		<h1>Clause Formatter</h1>
		<img src="clause-formatter.png"/>
		<span class="footer">Go!</span>
	</a>
	<a class="block" href="https://reader.hebrewtools.org/">
		<h1>Reader Generator</h1>
		<img src="reader-generator.png"/>
		<span class="footer">Go!</span>
	</a>

	<p>Copyright &copy; 2016&ndash;<?=date('Y')?> <a href="https://camilstaps.nl">Camil Staps</a>.</p>

	<p>See <a href="https://github.com/HebrewTools">GitHub</a> for the source code.</p>
</body>
</html>
