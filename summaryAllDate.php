<body>
    <div id="summaryAllDate">
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getStudentAttendInfoBySubjectID.php";
        include($path);

        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendDateBySubjectID.php";
        include($path);

        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAllAttendInfoBySubjectID.php";
        include($path);

        echo "<table class='table dataTable' id='summaryAllDateTable'>";
        $i = 0;
        // echo $stmt2->rowCount();
        while ($row = $stmt->fetch()) {
            if ($stmt->rowCount() > 0 && $i == 0) {
                echo '<thead><tr>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ - สกุล</th>
                                <th>ชั้นปี</th>
                                <th>สาขา</th>';

                while ($rowDate = $getDate->fetch()) {
                    echo '<th>' . $rowDate['dayCheckName'] . '</th>';
                }
                echo '</tr></thead><tbody>';
            }
            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                                <td>' . $row['Year'] . '</td>
                                <td>' . $row['Branch'] . '</td>';

            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendDateBySubjectID.php";
            include($path);





            while ($rowDate = $getDate->fetch()) {
                $attendByID = $pdo->prepare("SELECT * FROM attendance_status a,user_info b
                WHERE a.subject_id = ?
                AND a.stdId = ?
                AND a.dayCheckName =?
                AND a.stdId = b.stdId
                
                ");
                $attendByID->bindParam(1, $subject_id);
                $attendByID->bindParam(2, $row['stdId']);
                $attendByID->bindParam(3, $rowDate['sqlformatDayCheckName']);
                $attendByID->execute();
                
                while ($rowAttend = $attendByID->fetch()) {
                        echo '<td>' . $rowAttend['attendanceStatus'].' '.$rowDate['sqlformatDayCheckName'] . '</td>';
                       
                   
                    }
                  
                }
            
              

            echo '</tr>';
            $i++;
        } ?>
        </tbody>
        </table>

    </div>

</body>

<script>
    $(document).ready(function() {
        $('#summaryAllDateTable').DataTable();
    });
</script>