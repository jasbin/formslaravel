<!DOCTYPE html>
<head>
    <title>Home</title>
</head>
<body>
    <p>Name Form</p>

        <form action="/form" method="POST">
            @csrf
            First name:<br>
            <input type="text" name="firstname" >
            <br>
            Last name:<br>
            <input type="text" name="lastname" >
            <br><br>
            <input type="submit" value="Submit">
        </form>
</body>
</html>