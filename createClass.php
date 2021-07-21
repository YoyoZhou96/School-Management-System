<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="Images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/style2.css">
    <title>Create Class</title>
</head>

<body>
    <section id="page">
        <header>
            <hgroup>
                <h1>Create new classes</h1>
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
                <h3>Please create classes here</h3> <br> <br>
                <form action="data.php" method="POST">
                    <label for="ClassName" class="form1">ClassName:</label>
                    <input type="text" name="classname" id="classname" class="form2" autofocus>
                    <br> <br>
                    <label for="Section" class="form1">Section Name:</label>
                    <input type="text" name="section" id="section" class="form2">
                    <br> <br>
                    <label for="Teacher" class="form1">Section Teacher:</label>
                    <input type="text" name="teacher" id="teacher" class="form2">

                    <br> <br>
                    <input type="submit" name="classSubmit" id="classSubmit" value="Submit" class="button">
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
