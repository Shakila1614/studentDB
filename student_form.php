<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Profile</title>
    <script src="script.js"></script>
</head>
<body>
    <h2>Student Profile Form</h2>
    <form action="result.php" method="post" onsubmit="return validateForm()">
        Name: <input type="text" name="name" class="form-field" required><br><br>
        Roll: <input type="text" name="roll" class="form-field" required><br><br>
        Email: <input type="text" name="email" class="form-field" required><br><br>
        Phone: <input type="text" name="phone" class="form-field" required><br><br>
        DOB: <input type="date" name="dob" class="form-field" required><br><br>
        Department: <input type="text" name="department" class="form-field" required><br><br>
        Gender:
        <select name="gender" class="form-field" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>
        Address: <textarea name="address" class="form-field" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
