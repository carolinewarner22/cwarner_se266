<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="firstName"><strong>First Name:</strong></label>
        <input id="firstName" type="text" name="firstName">

        <label for="lastName"><strong>Last Name:</strong></label>
        <input id="lastName" type="text" name="lastName">

        <br>

        <p><strong>Marital Status:</strong></p>
        <label for="married">Married</label>
        <input name="maritalStatus" id="married" type="radio" value="married">
        <label for="notMarried">Not Married</label>
        <input name="maritalStatus" id="notMarried" type="radio" value="not married">

        <br><br>

        <label for="birthDate"><strong>Date of Birth:</strong></label>
        <input id="birthDate" type="date" name="birthDate">

        <br>

        <p><strong>Height:</strong></p>
        <input id="feet" type="number" name="feet">
        <label for="feet">ft.</label>

        <input id="inches" type="number" name="inches">
        <label for="inches">in.</label>

        <br>

        <p><strong>Weight:</strong></p>
        <input id="weight" step="0.1" type="number" name="weight">
        <label for="weight">lbs.</label>

        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>