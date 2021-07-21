<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="Images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Enrollment</title>
</head>

<body>
    <section id="page">
        <header>
            <hgroup>
                <h1>Register your personal account </h1>
            </hgroup>
        </header>

        <nav class="nav">
            <ul>
            <li><a href="enroll.php">Enrollment</a></li>
            <li><a href="createClass.php">Create class</a></li>
            <li><a href="studentInfo.php">Student & Class</a></li>
            <li><a href="searchStudentInfo.php">Search for Student</a></li>
            </ul>
        </nav>

        <div class="line"></div> <!-- Dividing line -->

        <div id="d1">
            <div id="d2">
                <h3>Please enter your personal information here</h3> <br> <br>
                <form action="data.php" method="POST">
                    <label for="StudentName" class="form1">StudentName:</label>&nbsp;&nbsp;
                    <input type="text" name="studentname" id="studentname" class="form2" autofocus>
                    <br> <br>
                    <label for="FatherName" class="form1">FatherName:</label>&nbsp;&nbsp;
                    <input type="text" name="fathername" id="fathername" class="form2">
                    <br> <br>
                    <label for="PhoneNumber" class="form1">Phonenumber:</label>&nbsp;&nbsp;
                    <input type="text" name="phonenumber" id="phonenumber" class="form2">
                    <br> <br>
                    <label for="Address" class="form1">CurrentAddress:</label>&nbsp;&nbsp;
                    <input type="text" name="address" id="address" class="form2">
                    <br> <br>
                    <label for="Birth" class="form1">Date of Birth:</label>&nbsp;&nbsp;
                    <input type="text" name="birth" id="birth" class="form2">
                    <br> <br>
                    <label for="Admission" class="form1">Date of Admission:</label>&nbsp;&nbsp;
                    <input type="text" name="admission" id="admission" class="form2">

                    <br> <br>
                    <input type="submit" name="studentSubmit" id="studentSubmit" value="Submit" class="button">
                    <input type="reset" name="reset" id="reset" class="button">
                </form>
            </div>
        </div>

        <footer>
            <!-- Marking the footer section -->

            <div class="line"></div>

            <p>Copyright &copy; 2021 - School Management System.com</p>

        </footer>
    </section>
</body>

</html>
