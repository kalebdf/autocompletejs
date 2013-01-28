<?php
// this template receives:
// $example - example array

$page_title = 'Example';
include(APP_PATH.'pages/header.php');
?>

<div class="single-example">
  
<div class="code_container">
<pre class="brush:js; toolbar:false;">
<?php echo $example['js']; ?>  
</pre>
</div>

<div class="markup_container">
<?php echo $example['html'] . "\n"; ?>
</div>

</div><!-- end div.single-example -->

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/shCore.js"></script>
<script src="js/shBrushJScript.js"></script>
<script src="js/autocomplete.js"></script>
<script>
var init = function() {

// start example code
<?php echo $example['js'] . "\n"; ?>
// end example code

// turn on syntax highlighter
SyntaxHighlighter.all();

}; // end init()
$(document).ready(init);
</script>

<?php
include(APP_PATH.'pages/footer.php');
?>