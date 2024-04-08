<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="firstName"><strong>First Name:</strong></label>
        <input id="firstName" type="text">

        <label for="lastName"><strong>Last Name:</strong></label>
        <input id="lastName" type="text">

        <br>

        <p><strong>Marital Status:</strong></p>
        <label for="married">Married</label>
        <input name="maritialStatus" id="married" type="radio" value="married">
        <label for="notMarried">Not Married</label>
        <input name="maritialStatus" id="notMarried" type="radio" value="not married">

        <br><br>

        <label for="birthDate"><strong>Date of Birth:</strong></label>
        <input id="birthDate" type="date">

        <br>

        <p><strong>Height:</strong></p>
        <input id="feet" type="number">
        <label for="feet">ft.</label>

        <input id="inches" type="number">
        <label for="inches">in.</label>

        <br>

        <p><strong>Weight:</strong></p>
        <input id="weight" type="number">
        <label for="weight">lbs.</label>
    </form>
</body>
</html>