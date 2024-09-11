<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send the Post Data</title>
</head>
<body>
    <h1>Information </h1><br>
    <form action=" <?=url ("get-userdata")?>" method="POST">
        <label ><b> Name : </b><input type="text" name="name" id="name"></label><br>
        <label ><b>Age : </b><input type="text" name="age" id="age"></label><br>
        <label><b>Mobile Number : </b><input type="text" name="number" id="number"></label><br>
        <label ><b>Mail : </b><input type="text" name="mail" id="mail"></label><br>
        <input type="submit" value="Submit">
        </form>

</body>
</html>