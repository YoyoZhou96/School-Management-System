<?php
$connection = new mysqli("localhost", "root", "");
mysqli_select_db($connection, "SchoolManagement");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="Images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Student information</title>
</head>

<body>
    <section id="page">
        <header>
            <hgroup>
                <h1>Get the Students' information</h1>
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
                <h3>You can choose your classes here</h3> <br> <br>
                <form action="data.php" method="POST">
                    <label for="StudentName" class="form1">Student Name:</label>&nbsp;&nbsp;
                    <select name="studentName" id="studentName" class="select">
                    <option value=0>--Name--</option>
                    <?php
                    $sql= "select Name from Enrollment";
                    $result = $connection->query($sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<option value='$row[Name]'>$row[Name]</option>";
                    } 
                    ?>
                    </select>
                    <br> <br> <br> <br>

                    <label for="ClassName" class="form1">Class Name:</label>&nbsp;&nbsp;
                    <select name="className" id="className" class="select">
                    <option value=0>--Class--</option>
                    <?php
                    $sql= "select Name from Class";
                    $result = $connection->query($sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<option value='$row[Name]'>$row[Name]</option>";
                    } 
                    ?>
                    </select>
                    <br> <br>

                    <input type="submit" name="studentClassSubmit" id="studentClassSubmit" value="Submit" class="button">
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
