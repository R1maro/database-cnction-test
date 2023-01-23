<?php
require 'inc/config.php';
$dbh = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$stm = $dbh->prepare("SELECT * FROM publisher WHERE id < 50");
$stm->execute();
$publishers = $stm->fetchAll();
//echo '<pre>';
//print_r($publishers);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Publisher</title>
</head>
<body>

<section>
    <!--for demo wrap-->
    <h1>Publishers</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>Publisher_name</th>
                <th>Profile</th>
                <th>Added_on</th>
                <th>-</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <?php foreach ($publishers

            as $publisher): ?>
            <tbody>
            <tr>
                <td><?php echo $publisher['id'] ?></td>
                <td><?php echo $publisher['publisher_name']?></td>
                <td>
                    <a href="" style="color: gray">Go to profile</a>
                </td>
                <td><?php echo $publisher['added_on'] ?></td>
                <td>
                    <button>Del</button>
                    <button>...</button>
                </td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://github.com/R1maro">R!maro</a>
</div>
<script src="js/js.js">
    </body>
    </html>