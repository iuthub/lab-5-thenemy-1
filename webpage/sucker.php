<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
    <?php
    {
     $name =  isset($_POST['name']) ? $_POST['name']: "";
     $card = isset($_POST['card']) ? $_POST['card']: "";
     $section = isset($_POST['section']) ? $_POST['section'] : "";
     echo  $name;
     echo  $card;
     echo $section;
        $myfile = file_get_contents("sucker.txt","a+");
        $text = $name . $card . $section . "\n";
        file_put_contents("sucker.txt", $text, FILE_APPEND);
     ?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $section ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $card  ?></dd>
		</dl>
        <p>
           <?= $myfile ?>
        </p>
    <?php
    }
    ?>
	</body>
</html>  