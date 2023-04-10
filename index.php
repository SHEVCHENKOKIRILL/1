<?php
// TODO1
if (isset($_GET['php'])){
    $php = $_GET['query'];
    echo 'Results' . $php;
}


$id = 381009;
$apikey = 'AIzaSyBRGgz_CcfTGi7lC_stnS-qFhnnN1568ZA';
$q = "php";
$cx = '13313dfa572a2417f';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>My Browser</h2>
<form method="GET" action="/index.php">
    <label for="url">Url:</label>
    <input type="text" id="url" name="url" value=""><br><br>
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" value=""><br><br>
    <input type="submit" value="Submit">
    <script async src="https://cse.google.com/cse.js?cx=13313dfa572a2417f">
    </script>
    <div class="gcse-search"></div>
</form>
<h1>Search result</h1>
<h4>www.php.net</h4>
<?php
//TODO2
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

?>

</body>
</html>

