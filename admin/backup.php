<form action="aboutform.php" method="post">
	<label>Title</label>
	<input type="text" name="title" value="<?php print_r($title);?>">
	<label>Subtitle</label>
    <input type="text" name="subtitle" value="<?php print_r($subtittle);?>">
    <label>Description</label>
	<input type="text" name="description" value="<?php print_r($description);?>">
	<label>Button Text</label>
	<input type="text" name="btntext" value="<?php print_r($button);?>">
	<label>Image</label>
	<input type="text" name="imag" value="<?php print_r($image);?>">

	<button type="submit"> Submit</button>
</form>