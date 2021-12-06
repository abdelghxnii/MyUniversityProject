<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css.css">
    <title>Document</title>
</head>
<body>
<h2>My University</h2>
<div class="container">
    <div class="form">
        <p>Add a university</p>
        <label for="logo">Logo:</label>
        <input accept="image/png, image/jpeg" id="logo" type="file"><br>
        <label for="name">Name:</label>
        <input type="text" id="name"><br>
        <label for="domain">Domain:</label>
        <input type="text" id="domain"><br>
        <button class="addButton" type="submit">Add</button>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Domain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img style="height: 70px;" src="./img/Logo_inpt.png" alt=""></td>
                    <td>Institut national des postes et télécommunications</td>
                    <td>INPT Domain</td>
                </tr>
                <tr>
                    <td><img style="height: 70px;" src="./img/LogoEHTP.jpg" alt=""></td>
                    <td>Ecole Hassania Des Travaux Publics</td>
                    <td>EHTP Domain</td>
                </tr>
                <tr>
                    <td><img style="height: 70px;" src="./img/ENSEM.png" alt=""></td>
                    <td>National High School for Electricity and mechanics</td>
                    <td>ENSEM Domain</td>
                </tr>
            <tbody>
        </table>
    </div>
    
</div>
</body>
</html>