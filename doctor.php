<html>
<head>
    <title>Doctor Form</title>
</head>
<body bgcolor="#D8D8D8 ">
<center>
<h1>Doctor Information</h1>
<br>
<br>
<br>
<br>

<form action="doctor.php" method="POST">
    <table cellpadding="7" cellspacing="0">
        <!-- Full Name -->
        <tr>
            <td><label for="fullName">Full Name:</label></td>
            <td><input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required></td>
        </tr>

        <!-- Email -->
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" placeholder="Enter your email"></td>
        </tr>

        <!-- Phone -->
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone number"></td>
        </tr>

        <!-- Specialization Dropdown -->
        <tr>
            <td><label for="specialization">Specialization:</label></td>
            <td>
                <select id="specialization" name="specialization">
                    <option value="" disabled selected>Select your specialization</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Neurology">Neurology</option>
                </select>
            </td>
        </tr>

        <!-- Clinic Name -->
        <tr>
            <td><label for="clinicName">Clinic Name:</label></td>
            <td><input type="text" id="clinicName" name="clinicName" placeholder="Enter your clinic name"></td>
        </tr>

        <!-- Available Hours -->
        <tr>
            <td><label for="availableHours">Available Hours:</label></td>
            <td><input type="text" id="availableHours" name="availableHours" placeholder="e.g., 9 AM - 5 PM"></td>
        </tr>

        <!-- Consultation Fee -->
        <tr>
            <td><label for="consultationFee">Consultation Fee:</label></td>
            <td><input type="number" id="consultationFee" name="consultationFee" placeholder="Enter fee"></td>
        </tr>

        <!-- Experience Years -->
        <tr>
            <td><label for="experienceYears">Experience Years:</label></td>
            <td><input type="number" id="experienceYears" name="experienceYears" placeholder="Enter years of experience"></td>
        </tr>

        <!-- Gender Radio Buttons -->
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

        <!-- Additional Information -->
        <tr>
            <td><label for="additionalInfo">Additional Information:</label></td>
            <td><textarea id="additionalInfo" name="additionalInfo" rows="4" cols="30" placeholder="Any additional details"></textarea></td>
        </tr>
        <!-- Button -->
        <tr>
          <td colspan="2" align="center"><br>
            <input type="submit"  value="Submit">
            <input type="reset"  value="Clear">
          </td>
        </tr>
    </table>

    
</form>
</center>
</body>
</html>