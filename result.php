<?php
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
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

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Name: ". $row['name']. "<br>";
            echo "Roll: " . $row["roll"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Phone: " . $row["phone"] . "<br>";
            echo "DOB: " . $row["dob"] . "<br>";
            echo "Department: " . $row["department"] . "<br>";
            echo "Gender: " . $row["gender"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";

            echo "<br><br><br><br><br>";
        }
    } else {
        echo "<p>No records found.</p>";
    }

    mysqli_close($conn);

    echo "<a href='student_form.php'>Go Back</a>";
?>
