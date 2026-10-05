```php
<!DOCTYPE html>
<html>
<head>

    <title>City Hospital - Patient Registration</title>

    <style>

        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background-color: #f2f7f9;
        }

        .container {
            width: 650px;
            max-width: 95%;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            text-align: center;
            color: #176b87;
        }

        .hospital-name {
            text-align: center;
            color: #555;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;
            margin-top: 5px;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        .gender {
            width: auto;
            margin-right: 5px;
        }

        .submit-btn {
            margin-top: 20px;
            width: 100%;
            padding: 13px;
            background-color: #176b87;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0d4f64;
        }

        .result {
            margin-top: 25px;
            padding: 20px;
            background-color: #e8f6f8;
            border-radius: 8px;
        }

        .result h2 {
            color: #176b87;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #176b87;
            text-decoration: none;
            font-weight: bold;
        }

    </style>

</head>

<body>


<div class="container">

    <h1>
        Patient Registration Form
    </h1>

    <div class="hospital-name">
        City Hospital
    </div>


    <form method="POST" action="">


        <!-- Patient Name -->

        <label>
            Patient Name:
        </label>

        <input
            type="text"
            name="patient_name"
            placeholder="Enter patient name"
            required
        >


        <!-- Email -->

        <label>
            Email:
        </label>

        <input
            type="email"
            name="email"
            placeholder="Enter email address"
            required
        >


        <!-- Phone -->

        <label>
            Phone Number:
        </label>

        <input
            type="text"
            name="phone"
            placeholder="Enter phone number"
            required
        >


        <!-- Date of Birth -->

        <label>
            Date of Birth:
        </label>

        <input
            type="date"
            name="dob"
            required
        >


        <!-- Gender -->

        <label>
            Gender:
        </label>

        <input
            class="gender"
            type="radio"
            name="gender"
            value="Male"
            required
        >

        Male


        <input
            class="gender"
            type="radio"
            name="gender"
            value="Female"
        >

        Female


        <input
            class="gender"
            type="radio"
            name="gender"
            value="Other"
        >

        Other


        <!-- Blood Group -->

        <label>
            Blood Group:
        </label>

        <select
            name="blood_group"
            required
        >

            <option value="">
                -- Select Blood Group --
            </option>

            <option value="A+">A+</option>

            <option value="A-">A-</option>

            <option value="B+">B+</option>

            <option value="B-">B-</option>

            <option value="O+">O+</option>

            <option value="O-">O-</option>

            <option value="AB+">AB+</option>

            <option value="AB-">AB-</option>

        </select>


        <!-- Department -->

        <label>
            Department:
        </label>

        <select
            name="department"
            required
        >

            <option value="">
                -- Select Department --
            </option>

            <option value="General Medicine">
                General Medicine
            </option>

            <option value="Cardiology">
                Cardiology
            </option>

            <option value="Neurology">
                Neurology
            </option>

            <option value="Orthopedics">
                Orthopedics
            </option>

            <option value="Dermatology">
                Dermatology
            </option>

            <option value="Pediatrics">
                Pediatrics
            </option>

        </select>


        <!-- Doctor -->

        <label>
            Select Doctor:
        </label>

        <select
            name="doctor"
            required
        >

            <option value="">
                -- Select Doctor --
            </option>

            <option value="Dr. Rajesh Kumar">
                Dr. Rajesh Kumar - General Physician
            </option>

            <option value="Dr. Priya Sharma">
                Dr. Priya Sharma - Cardiologist
            </option>

            <option value="Dr. Arjun Rao">
                Dr. Arjun Rao - Neurologist
            </option>

            <option value="Dr. Vikram Reddy">
                Dr. Vikram Reddy - Orthopedic Specialist
            </option>

            <option value="Dr. Anjali Mehta">
                Dr. Anjali Mehta - Dermatologist
            </option>

            <option value="Dr. Sneha Patel">
                Dr. Sneha Patel - Pediatrician
            </option>

        </select>


        <!-- Appointment Date -->

        <label>
            Appointment Date:
        </label>

        <input
            type="date"
            name="appointment_date"
            required
        >


        <!-- Address -->

        <label>
            Address:
        </label>

        <textarea
            name="address"
            rows="4"
            placeholder="Enter patient address"
            required
        ></textarea>


        <!-- Submit -->

        <input
            class="submit-btn"
            type="submit"
            name="submit"
            value="Register Patient"
        >

    </form>


<?php

if (isset($_POST['submit'])) {

    // Retrieve values using $_POST

    $patient_name = $_POST['patient_name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $dob = $_POST['dob'];

    $gender = $_POST['gender'];

    $blood_group = $_POST['blood_group'];

    $department = $_POST['department'];

    $doctor = $_POST['doctor'];

    $appointment_date = $_POST['appointment_date'];

    $address = $_POST['address'];


    // Basic validation

    if (
        empty($patient_name) ||
        empty($email) ||
        empty($phone) ||
        empty($dob) ||
        empty($gender) ||
        empty($blood_group) ||
        empty($department) ||
        empty($doctor) ||
        empty($appointment_date) ||
        empty($address)
    ) {

        echo "<p class='error'>
                Please fill all required fields.
              </p>";

    }

    else {

        // Display submitted details using echo

        echo "<div class='result'>";

        echo "<h2>
                Patient Registration Successful
              </h2>";

        echo "<p>
                <strong>Patient Name:</strong>
                " . htmlspecialchars($patient_name) . "
              </p>";

        echo "<p>
                <strong>Email:</strong>
                " . htmlspecialchars($email) . "
              </p>";

        echo "<p>
                <strong>Phone Number:</strong>
                " . htmlspecialchars($phone) . "
              </p>";

        echo "<p>
                <strong>Date of Birth:</strong>
                " . htmlspecialchars($dob) . "
              </p>";

        echo "<p>
                <strong>Gender:</strong>
                " . htmlspecialchars($gender) . "
              </p>";

        echo "<p>
                <strong>Blood Group:</strong>
                " . htmlspecialchars($blood_group) . "
              </p>";

        echo "<p>
                <strong>Department:</strong>
                " . htmlspecialchars($department) . "
              </p>";

        echo "<p>
                <strong>Doctor:</strong>
                " . htmlspecialchars($doctor) . "
              </p>";

        echo "<p>
                <strong>Appointment Date:</strong>
                " . htmlspecialchars($appointment_date) . "
              </p>";

        echo "<p>
                <strong>Address:</strong>
                " . htmlspecialchars($address) . "
              </p>";

        echo "</div>";

    }

}

?>

    <a href="index.html" class="back">
        ← Back to City Hospital
    </a>

</div>

</body>
</html>
```
