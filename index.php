<?php

    // App title
    $title = "Google Fonts Demo";

    // Add font names here for lookup on Google Fonts
    $fonts = array(
          'Lato',
          //'Playfair Display',
          //'Roboto',
          //'Oswald',
          //'Raleway',
    );

    if ($_GET['fonts']) {

        $fonts = explode(",", $_GET['fonts']);
        array_unshift($fonts, $_GET['newfont'] );

    } else {

        $fonts = array(
                'Lato',
                //'Playfair Display',
                //'Roboto',
                //'Oswald',
                //'Raleway',
            );
    }

    $sample_text = "And that, I think, was the handle—that sense of inevitable
    victory over the forces of Old and Evil. Not in any mean or military sense;
    we didn't need that. Our energy would simply prevail. There was no point in
    fighting—on our side or theirs. We had all the momentum; we were riding the
    crest of a high and beautiful wave.…";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="A tool for previewing fonts available through Google Fonts">

<link rel="stylesheet" href="index.css">

<?php foreach($fonts as $font){ ?>
<link href='http://fonts.googleapis.com/css?family=<?= $font ?>' rel='stylesheet' type='text/css'>
<? } ?>

<title><?= $title ?></title>
</head>

<body>

<h1 id="title"><?= $title ?></h1>

<form>
    <input name="newfont" placeholder="New font name…">
    <input type="hidden" name="fonts" value="<?= implode(',', $fonts) ?>">
</form>

<?php foreach ($fonts as $font){ ?>
    <div class="sample" style='font-family: "<?= $font ?>"'><h2><?= $font ?>:</h2> <p><?= $sample_text ?></div>
<?  } ?>

</body>
</html>
