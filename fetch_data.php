<?php
        $regnoquery = "SELECT regno FROM u_student where sname = 'LENIN WAHENGBAM' LIMIT 1";
        $regno = mysqli_query($conn, $regnoquery);

        foreach($regno as $studentRegno)
        {
            $_SESSION['regno'] = $studentRegno['regno'];
        }
        $prgmquery = "SELECT prgm_name from u_prgm inner join u_student on u_student.prgm_id=u_prgm.prgm_id where regno='16EC159' LIMIT 1";
        $prgm = mysqli_query($conn, $prgmquery);

        foreach($prgm as $studentprgm)
        {
            $_SESSION['prgm'] = $studentprgm['prgm_name'];
        }

        $deptquery = "SELECT dept_name from u_dept inner join u_prgm on u_dept.dept_id=u_prgm.dept_id inner join u_student on u_student.prgm_id=u_prgm.prgm_id where regno='16EC159'  LIMIT 1";
        $dept = mysqli_query($conn, $deptquery);

        foreach($dept as $studentdept)
        {
            $_SESSION['dept'] = $studentdept['dept_name'];
        }
    ?>