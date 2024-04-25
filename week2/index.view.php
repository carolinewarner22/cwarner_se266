<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W2</title>
</head>
<body>
    <form name="patient" action="index.php" method="post">
        <div class="form-control">
            <label for="fName">First Name</label>
            <input type="text" name="fName" value="<?= $fName; ?>">
        </div>
        <br />
        <div class="form-control">
            <label for="lName">Last Name</label>
            <input type="text" name="lName" value="<?= $lName; ?>">
        </div>
        <br />
        <div class="form-control">
            <label for="maritalStatus">Marital Status</label>
            <select id="maritalStatus" name="maritalStatus">
                <option value="">Select</option>
                <option value="married" <?= ($maritalStatus == 'Married') ? 'selected' : ''; ?>>Married</option>
                <option value="not married" <?= ($maritalStatus == 'Not Married') ? 'selected' : ''; ?>>Not Married</option>
            </select>
        </div>
        <br />

        <div class="form-control">
            <label for="birthdate">Date of Birth</label>
            <input type="date" name="birthdate" value="<?= $birthdate; ?>">
        </div>
        <br />

        <p>Height:</p>
        <div class="form-control">
            <label for="heightFt">Ft.</label>
            <input type="number" name="heightFt" step="1" value="<?= $heightFt; ?>">
        </div>
        <div class="form-control">
            <label for="heightIn">In.</label>
            <input type="number" name="heightIn" step="1" value="<?= $heightIn; ?>">
        </div>

        <p>Weight:</p>
        <div class="form-control">
            <label for="weight">Lbs.</label>
            <input type="number" name="weight" step="0.1" value="<?= $weight; ?>">
        </div>
        <br />

        <div class="form-submit">
            <input type="submit" name="patient_info_submit" value="Submit">
        </div>
    </form>
    <div>
        <?php if (isset($_POST["patient_info_submit"])) : ?>

        <?php

        $bmi = BMI($heightFt, $heightIn, $weight);

        $age = age($birthdate);
        ?>
        <br />
        <h3>Patient Info</h3>
        <p><span class="result-label">First Name:</span><?= $fName; ?></p>
        <p><span class="result-label">Last Name:</span><?= $lName; ?></p>
        <p><span class="result-label">Marital Status:</span><?= $maritalStatus; ?></p>
        <p><span class="result-label">Date of Birth:</span><?= $birthdate; ?></p>
        <p><span class="result-label">Height:</span><?= $heightFt . "'" . $heightIn . '"'; ?></p>
        <p><span class="result-label">Weight:</span><?= $weight; ?> lbs</p>
        <p><span class="result-label">Age:</span><?= $age; ?></p>
        <p><span class="result-label">Body Mass Index:</span><?= number_format($bmi, 1); ?></p>
        <p><span class="result-label">Classification:</span><?= bmiDesc($bmi) ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
