<!Doctype html>
<head>
    <title>packLunch</title>
</head>
<body>
        <form action="adduser.php" method="post">
            Forename: <input type="text" name="forname"><br>
            Surnamce: <input type="text" name="surname"><br>
            House: <input type="text" name="house"><br>
            Year: <input type="number" name="year"><br>
            Balance: <input type="number" name="balance"><br>
            Role:<input type="radio" name="role" value="student"> Student<br>
            <input type="radio" name="role" value="Kitchen Staff"> Teacher<br>
            Password:<input type="password" name="password"><br>
            <input type="submit" value="Submit"> 
        </form>
</body>
</html>