<?php require_once dirname(__FILE__) .'/../../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<title>Kalkulator</title>
</head>
<body>
	<div class="pure-menu pure-menu-horizontal">
		<a href="<?= _APP_URL ?>" class="pure-menu-heading pure-menu-link">APLIKACJE INTERNETOWE</a>
		<ul class="pure-menu-list">
			<li class="pure-menu-item">
				<a href="<?= _CALC_PATH ?>" class="pure-menu-link">Kalkulator</a>
			</li>
			<li class="pure-menu-item">
				<a href="<?= _CREDIT_CALC_PATH ?>" class="pure-menu-link">Kalkulator kredytowy</a>
			</li>
			<li class="pure-menu-item">
				<a href="<?= _LOGOUT_PATH ?>" class="pure-menu-link">Wyloguj</a>
			</li>
		</ul>
	</div>

	<div style="width:90%; margin: 2em auto;">
		<form action="<?php print(_CALC_PATH);?>/app/calc.php" method="post"  class="pure-form pure-form-stacked">
			<label for="id_x">Liczba 1: </label>
			<input id="id_x" type="text" name="x" value="<?php print($x ?? ''); ?>" /><br />
			<label for="id_op">Operacja: </label>
			<select name="op">
				<option value="plus">+</option>
				<option value="minus">-</option>
				<option value="times">*</option>
				<option value="div">/</option>
			</select><br />
			<label for="id_y">Liczba 2: </label>
			<input id="id_y" type="text" name="y" value="<?php print($y ?? ''); ?>" /><br />
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</form>	

		<?php
		//wyświeltenie listy błędów, jeśli istnieją
		if (isset($messages)) {
			if (count ( $messages ) > 0) {
				echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
				foreach ( $messages as $key => $msg ) {
					echo '<li>'.$msg.'</li>';
				}
				echo '</ol>';
			}
		}
		?>

		<?php if (isset($result)){ ?>
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
		<?php echo 'Wynik: '.$result; ?>
		</div>
		<?php } ?>
	</div>
</body>
</html>