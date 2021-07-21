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
    <link rel="stylesheet" type="text/css" href="styles/style4.css">
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
                <h3>Show all students</h3> <br>
                <form action="data.php" method="GET">
                <?php
                    $sql = "select * from Enrollment;";
                    $result=mysqli_query($connection,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                    }
                    echo "<br>";
                    echo "<table border='1'>";
                    while ($row = mysqli_fetch_assoc($result)) { 
                        echo "<tr>";
                        foreach ($row as $field => $value) {
                            echo "<td>" . $value . "</td>"; 
                        }
                        echo "</tr>";
                    }
                        echo "</table>";
                ?>
                <?php
                    $sql = "select * from Student;";
                    $result=mysqli_query($connection,$sql);
                    if (!$result) {
                        printf("Error: %s\n", mysqli_error($connection));
                        exit();
                    }
                    echo "<br>";
                    echo "<table border='1'>";
                    while ($row = mysqli_fetch_assoc($result)) { 
                        echo "<tr>";
                        foreach ($row as $field => $value) {
                            echo "<td>" . $value . "</td>"; 
                        }
                        echo "</tr>";
                    }
                        echo "</table>";
                ?>

              
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

