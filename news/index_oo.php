<?php
# A simple application to extract news articles from a database using mysqli and print them out.
# This script uses the object oriented method as used in David Powers' book, PHP Solutions 2nd Ed.

# assign host, username, password and database name to variables
$host     = "localhost"; # usually "localhost" but may be different
$user     = "******";
$password = "******";
$name     = "******";

# connect to the database or stop the script and give an error message
$conn = new mysqli($host, $user, $password, $name) or die ("Cannot open database");

# build the query and assign it to a variable
$query = "SELECT headline, markup, pubdate FROM news ORDER BY pubdate DESC LIMIT 5";

# run the query and assign the result to a variable or give an error message
$result = $conn->query($query) or die ("Error querying database.");

# close the database connection
$conn->close();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>The News (PHP and MySQL example)</title>
		<link rel="stylesheet" href="style/base.css">
	</head>

	<body>
		<h1>The News</h1>
    	<h2>A simple application using PHP (OO) and MySQL</h2>
<?php
# step through each news article, one at a time
while ($row = $result->fetch_assoc())
{
	# assign each field to a variable
	$headline = $row['headline'];
	$date = $row['pubdate'];
	$markup = $row['markup'];
	
	# convert mysql date to php timestamp
	$timestamp = strtotime($date);
	
	# format php timestamp
	$display_date = date('jS F Y', $timestamp);
	$display_time = date('g:ia', $timestamp);
	
	# print out the news article
	echo "<article>\n";
	echo "<header>\n";
	echo "<h1>$headline</h1>\n";
	echo "<p class=\"date\">$display_date</p>\n";
	echo "</header>\n";
	echo "$markup\n";
	echo "<footer>\n<p class=\"date\">Published at $display_time</p>\n</footer>\n";
	echo "</article>\n\n";
}
?>
		<footer>This news is brought to you by PHP and MySQL (with HTML and CSS)</footer>
	</body>
</html>
