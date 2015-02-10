<!DOCTYPE html>
<?php
    // Add font names here for lookup on Google Fonts
    $fonts = array(
          'Lato',
          'Consolas',
          'Playfair Display',
          'Roboto',
          'Oswald',
          'Raleway',
          'Lobster'
    );

    $sample_text = "And that, I think, was the handle—that sense of inevitable
    victory over the forces of Old and Evil. Not in any mean or military sense;
    we didn't need that. Our energy would simply prevail. There was no point in
    fighting—on our side or theirs. We had all the momentum; we were riding the
    crest of a high and beautiful wave.…";
?>
<html lang="en">
<head>

<?php foreach($fonts as $font){
        print "<link href='http://fonts.googleapis.com/css?family=$font' rel='stylesheet' type='text/css'>";
} ?>

    <meta charset="UTF-8">
    <title>Fonts Demo</title>
</head>
<body style="background-color: rgb(200, 193, 174)">
    <h1>Fonts Demo</h1>
    <form>
        <input name="font" placeholder="Add new fonts here">
        <?php foreach($fonts as $font){
            print "<input type='hidden' name='font' >";
        } ?>
    </form>

<?php foreach ($fonts as $font){
          print("<div style='font-family: \"$font\"' ><h2>$font:</h2> <p>$sample_text</div>"); 
    } ?>
<script>
    function blur(elem){
        console.log("click!");
    };
</script>

</body>
</html>
