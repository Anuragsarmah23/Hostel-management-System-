<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-spellcheck/0.2/jquery.spellcheck.min.js"></script>
</head>
<body>
	<form method="post">
		<textarea></textarea>
		<input type="submit">
	</form>
	<script>
		$('textarea').spellAsYouType();
		$(function() {$('textarea').spellAsYouType(defaultDictionary:'English',checkGrammar:true);});
	</script>
 </body>
 </html>