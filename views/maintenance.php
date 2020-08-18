<?php
/**
 * Maintenance mode template that's shown to logged out users.
 *
 * @package   maintenance-mode
 * @copyright Copyright (c) 2020, Liz Laffitte
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/maintenance.css', dirname( __FILE__ ) ); ?>">

	<title>Down for Maintenance | Nose Graze</title>
</head>

<body>

<header>
	<h1><a href="<?php echo home_url( '/' ); ?>">Company Name</a></h1>

	<h2>Optional Subhead</h2>
</header>

<main>
	<p>We;'re' making some <strong>awesome</strong> changes to the site. We'll be back shortly! Thanks for your patience.</p>
</main>

</body>
</html>