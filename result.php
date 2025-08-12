<?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get and sanitize inputs
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $roll = mysqli_real_escape_string($conn, $_POST['roll']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        // Insert query
        $insert_sql = "INSERT INTO student (name, roll, email, phone, dob, department, gender, address) 
                       VALUES ('$name', '$roll', '$email', '$phone', '$dob', '$department', '$gender', '$address')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "<p style='color:green;'>Data inserted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error inserting data: " . mysqli_error($conn) . "</p>";
        }
    }

    // Select query
    $select_sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $select_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Records</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";
            echo "<strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br>";
            echo "<strong>Roll:</strong> " . htmlspecialchars($row["roll"]) . "<br>";
            echo "<strong>Email:</strong> " . htmlspecialchars($row["email"]) . "<br>";
            echo "<strong>Phone:</strong> " . htmlspecialchars($row["phone"]) . "<br>";
            echo "<strong>DOB:</strong> " . htmlspecialchars($row["dob"]) . "<br>";
            echo "<strong>Department:</strong> " . htmlspecialchars($row["department"]) . "<br>";
            echo "<strong>Gender:</strong> " . htmlspecialchars($row["gender"]) . "<br>";
            echo "<strong>Address:</strong> " . htmlspecialchars($row["address"]) . "<br>";
            echo "</div>";
        }
    } else {
        echo "<p>No records found.</p>";
    }

    mysqli_close($conn);

    echo "<a href='student_form.php'>Go Back</a>";
?>
