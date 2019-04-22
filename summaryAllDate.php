<body>
<h3 class="text-center mt-4">สรุปข้อมูลการมาเรียนของนักศึกษา ทุกคาบ</h3>
    <div id="summaryAllDate" class="mb-5 px-3" style="max-width:1870px!important;">
       

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

        echo "<table style='max-width:1870px!important;' 
        class='table dataTable table-bordered table-responsive' id='summaryAllDateTable' data-page-length='50'>";
        
        $i = 0;
        // echo $stmt2->rowCount();
        while ($row = $stmt->fetch()) {
            if ($stmt->rowCount() > 0 && $i == 0) {
                echo '<thead>
                <tr>
                <th class="text-center" colspan="4">ข้อมูลนักศึกษา</th>
                <th class="text-center" colspan="'.$getDate->rowCount().'">วัน/เดือน/ปี ที่เรียน</th>
                <th class="text-center" colspan="3">อัตราการเข้าเรียน คิดเป็นเปอร์เซ็นต์</th>
                </tr>
                <tr>
                                <th class="text-center">รหัสนักศึกษา</th>
                                <th class="text-center">ชื่อ - สกุล</th>
                                <th class="text-center">ชั้นปี</th>
                                <th class="text-center">สาขา</th>
                                ';

                while ($rowDate = $getDate->fetch()) {
                    echo '<th class="text-center">' . $rowDate['dayCheckName'] . '</th>';
                
                  
                }
                echo '<th class="text-center">มาเรียน</th>
                <th class="text-center">ขาดเรียน</th>
                <th class="text-center">ลา</th>';
                echo '</tr></thead><tbody>';
            }
            echo '<tr>
                                <td>' . $row['stdId'] . '</td>
                                <td>' . $row['firstName'] . ' ' . $row['lastName'] . '</td>
                                <td class="text-center">' . $row['Year'] . '</td>
                                <td class="text-center">' . $row['Branch'] . '</td>';

            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/SoftEn2019/Sec2/ScrumBros/model/getAttendDateBySubjectID.php";
            include($path);




            $thisStudentPresent = 0;
            $thisStudentAbsent = 0;
            $thisStudentLeave = 0;
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
                    if ($rowAttend['attendanceStatus'] == 'มา') {
                        echo '<td class="text-center text-white bg-success">' . $rowAttend['attendanceStatus'] . '</td>';
                       
                        $thisStudentPresent++;
                    } else if ($rowAttend['attendanceStatus'] == 'ขาด') {
                        echo '<td class="text-center text-white bg-danger">' . $rowAttend['attendanceStatus'] . '</td>';
                        $thisStudentAbsent++;
                    } else if ($rowAttend['attendanceStatus'] == 'ลา') {
                        echo '<td class="text-center text-white bg-warning">' . $rowAttend['attendanceStatus'] . '</td>';
                        $thisStudentLeave++;
                    }
                }
            }
            $percentPressent = (($thisStudentPresent / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100);
            $percentAbsent = (($thisStudentAbsent / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100);
            $precentLeave = (($thisStudentLeave / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100);

            echo "<td class='text-center'>" .  number_format((float)$percentPressent, 2, '.', '')."%</td>";
            echo "<td class='text-center'>" .  number_format((float)$percentAbsent, 2, '.', '') . "%</td>";
            echo "<td class='text-center'>" .  number_format((float)$precentLeave, 2, '.', '') . "%</td>";



            echo '</tr>';
            $i++;
        } ?>
        </tbody>
        </table>

    </div>

</body>

<script>
    $(document).ready(function() {
        $('#summaryAllDateTable').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
    });
</script>