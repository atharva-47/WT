<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function()
	{
	    $("#insertBeforeButton").click(function(){
		$("p").before("<b>Before Text</b> ");
	    });
	    
	    $("#insertAfterButton").click(function(){
		$("p").after(" <b>After Text</b>");
	    });
	});
</script>
</head>
<body>

<h2>Insert Text Before and After Paragraph</h2>

<button id="insertBeforeButton">Insert Before</button>
<button id="insertAfterButton">Insert After</button>

<p>This is a paragraph.</p>

</body>
</html>

