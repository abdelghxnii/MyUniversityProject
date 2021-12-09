<?php
require 'conn.php';
$sql="select *from university;";
$result = mysqli_query($conn,$sql);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css.css">
    <title>Document</title>
</head>
<body>
<h2>My University!!</h2>
<div style="margin-left:00px;" class="container">
    <div class="form">
        <form action="adduni.php" method="POST" enctype="multipart/form-data">
        <p>Add a university!</p>
        <label for="logo">Logo:</label>
        <input accept="image/*" name="logo" id="logo" type="file"><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="domain">Domain:</label>
        <input type="text" name="domain" id="domain"><br>
        <button class="addButton" name="add" type="submit">Add</button>
        </form>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th style="width: 200px;">Logo</th>
                    <th style="width: 400px;">Name</th>
                    <th style="width: 400px;">Domain</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $university):?>
                    <tr>
                        <td><img style="height: 70px;" src="./img/<?= $university['uniLogo'] ?>" alt=""></td>
                        <td><?= $university['uniName'] ?></td>
                        <td><?= $university['uniDomain'] ?></td>
                    </tr>
                <?php endforeach?>
            <tbody>
        </table>
    </div>
    
</div>
</body>
</html>