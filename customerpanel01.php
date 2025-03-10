<html>
<head>
    <title>Patient Form</title>
</head>
<body bgcolor="#D8D8D8">
<center>
  <h1>Patient Information</h1>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="customerpanel01.php" method="POST">
    <table cellpadding="7" cellspacing="0">
        <!-- Name -->
        <tr>
            <td><label for="fullName">Full Name:</label></td>
            <td><input type="text" id="fullName" name="fullName" placeholder="Enter your fullname" required></td>
        </tr>
        <!-- Age -->
        <tr>
            <td><label for="age">Age:</label></td>
            <td><input type="number" id="age" name="age" placeholder="Enter your age" required></td>
        </tr>

        <!-- Gender -->
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label>
            </td>
        </tr>

        <!-- Medical History -->
        <tr>
            <td><label for="medicalHistory">Medical History:</label></td>
            <td><textarea id="medicalHistory" name="medicalHistory" rows="4" cols="30" placeholder="Enter your medical history" required></textarea></td>
        </tr>

        <!-- Preferred Doctor -->
        <tr>
            <td><label for="preferredDoctor">Preferred Doctor:</label></td>
            <td>
                <select id="preferredDoctor" name="preferredDoctor" required>
                    <option value="" disabled selected>Select a doctor</option>
                    <option value="Dr. Smith">Dr. Smith</option>
                    <option value="Dr. Johnson">Dr. Johnson</option>
                    <option value="Dr. Williams">Dr. Williams</option>
                    <option value="Dr. Brown">Dr. Brown</option>
                </select>
            </td>
        </tr>

        <!-- Insurance Provider -->
        <tr>
            <td><label for="insuranceProvider">Insurance Provider:</label></td>
            <td>
                <select id="insuranceProvider" name="insuranceProvider" required>
                    <option value="" disabled selected>Select an insurance provider</option>
                    <option value="Provider A">Provider A</option>
                    <option value="Provider B">Provider B</option>
                    <option value="Provider C">Provider C</option>
                    <option value="Provider D">Provider D</option>
                </select>
            </td>
        </tr>
        <!--Button-->
        <tr>
          <td colspan="2" align="center"><br>
            <input type="submit"  value="Submit">
            <input type="reset"  value="Clear">
          </td>
        </tr>
    </table>
    <br>
    <br>

    <!--<a href="Login.php" >
        <button type="button">Back</button>
    </a>

    <input type="submit" value="Next"> -->
</form>
</center>
</body>
</html>