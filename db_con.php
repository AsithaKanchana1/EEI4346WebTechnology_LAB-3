<?php
//  connecting to data base
$con = mysqli_connect("localhost", "root", "", "emp_db");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// we need to check if it is new recode addition or rearch 
if (isset($_POST['action'])) {
    if ($_POST['action'] === 'Add Record') {
        // Insert a new record (i have learn this form youtube videos) 
        $emp_dept = mysqli_real_escape_string($con, $_POST['emp_dep']);
        $dpt_type = mysqli_real_escape_string($con, $_POST['dpt_type']);
        $emp_dpt_no = mysqli_real_escape_string($con, $_POST['emp_dpt_no']);

        $sql = "INSERT INTO emp_dept (EMP_DEPT, DEPT_TYPE, EMP_DEPT_NO) 
                VALUES ('$emp_dept', '$dpt_type', '$emp_dpt_no')";

        if (mysqli_query($con, $sql)) {
            echo 'Your EMP Details added Successfully....';
        } else {
            echo 'Error EMP Details are not added .....: ' . mysqli_error($con);
        }
    } elseif ($_POST['action'] === 'Search') {
        // Search eka
        $search_emp_dep = mysqli_real_escape_string($con, $_POST['search_emp_dep']);
        
        $sql = "SELECT * FROM emp_dept WHERE EMP_DEPT = '$search_emp_dep'";
        
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Record Found:</h2>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "EMP_DEPT: " . $row['EMP_DEPT'] . "<br>";
                echo "DEPT_TYPE: " . $row['DEPT_TYPE'] . "<br>";
                echo "EMP_DEPT_NO: " . $row['EMP_DEPT_NO'] . "<br><br>";
            }
        } else {
            echo "No record found with EMP_DEPT: " . $search_emp_dep;
        }
    }
}

// Close the connection
mysqli_close($con);
?>
