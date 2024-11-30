<?php
//  connecting to data base
        // localhost >> host server where database is in
        // root >> the user name of the data base 
        // "" >> the passsword of the database (in my case i dont have password so i leve it empty)
        // emp_db>> database name 
$con = mysqli_connect("localhost", "root", "", "emp_db");

if (!$con) { //if conndition failed then 
    die('Could not connect: ' . mysqli_connect_error()); 
} // (die >> stop the script executing ) and print error massage using myqli errormassage 

// we need to check if it is new recode addition or rearch 
if (isset($_POST['action'])) { 
    if ($_POST['action'] === 'Add Record') { // if the html page btn value is 'Add Record 'then executing this 
        // Insert a new record (i have learn this form youtube videos) 
        // purpus is to prevent SQL Injection attacks by
        // using 'mysqli_real_escape_string' we can scape special caractors like "" and * and  ==
        $emp_dept = mysqli_real_escape_string($con, $_POST['emp_dep']); // capture values saparately from html form 
        $dpt_type = mysqli_real_escape_string($con, $_POST['dpt_type']);// i have assign post method fealds to variables so i can sanitize them 
        $emp_dpt_no = mysqli_real_escape_string($con, $_POST['emp_dpt_no']);

        $sql = "INSERT INTO emp_dept (EMP_DEPT, DEPT_TYPE, EMP_DEPT_NO) 
                VALUES ('$emp_dept', '$dpt_type', '$emp_dpt_no')";
                // in html form need to make sure method of the form is POST 
                //i have used all values in single line but can use them separate lines like,
                //('$emp_dept',
                // '$dpt_type',
                // '$emp_dept_no',
                //)

        if (mysqli_query($con, $sql)) { // mysqli_query() displayes bellow massage if the query succeeded 
            echo 'Your EMP Details added Successfully....';
        } else {
            echo 'Error EMP Details are not added .....: ' . mysqli_error($con); // if quary failed
        }
    } elseif ($_POST['action'] === 'Search') {
        // Search 
        // if html btn press value is Serch then this will execute
        $search_emp_dep = mysqli_real_escape_string($con, $_POST['search_emp_dep']);
        // i have assign to variable to html page 'search_emp_dep' that way i can prevent SQL injection attack
        
        $sql = "SELECT * FROM emp_dept WHERE EMP_DEPT = '$search_emp_dep'";
        //sql  query for select all data from database that maches 'search_emp_dep' value         
        $result = mysqli_query($con, $sql); // output of the serch will be inside result variable 

        if (mysqli_num_rows($result) > 0) { // checking if the rearch output is empty or not
            echo "<h2>Your Serched Emp Details Found : </h2>"; //simple output massage
            while ($row = mysqli_fetch_assoc($result)) {
                echo "EMP_DEPT: " . $row['EMP_DEPT'] . "<br>";
                echo "DEPT_TYPE: " . $row['DEPT_TYPE'] . "<br>";
                echo "EMP_DEPT_NO: " . $row['EMP_DEPT_NO'] . "<br><br>";
            }
        } else {
            echo "No record found with EMP_DEPT Sorry .....: " . $search_emp_dep; // if there is no results 
        }
    }elseif ($_POST['action'] --- 'Delete'){

        //input sanitization 
        $emp_dept_no = mysqli_real_escape_string($con, $_POST['emp_dpt_no']);

        //Delete Queary
        $sql = "DELETE FROM emp_dept WHERE EMP_DEPT_NO = '$emp_dept_no'";

        // check the result
        if (mysqli_query($con, $sql)) {
            if (mysqli_affected_rows($con) > 0 ) {
                echo "Recode With EMP_DEPT_NO Deleted Sucsessfully ....";
            } else{
                echo "No Recode Found .....";
            }
        } else {
            echo "Error Detecting Recode : " . mysqli_error($con);
        }
    }
}

// Close the connection to database that way we can free resouses
mysqli_close($con);


            // @Asitha Kanchana Palliyaguru 
            // Open Univercity Of Srilanka
            // 2024.11.09
            // EEI4346 Web Technology
            // LAB Test 03 

?>
