<body>
    <div id="summaryAllDate" class="m-5">
        <h3 class="text-center my-3 mb-4">สรุปข้อมูลการมาเรียนของนักศึกษา ทุกคาบ</h3>

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

        echo "<table class='table dataTable table-bordered table-responsive' id='summaryAllDateTable'>";
        $i = 0;
        // echo $stmt2->rowCount();
        while ($row = $stmt->fetch()) {
            if ($stmt->rowCount() > 0 && $i == 0) {
                echo '<thead><tr>
                                <th>รหัสนักศึกษา</th>
                                <th>ชื่อ - สกุล</th>
                                <th>ชั้นปี</th>
                                <th>สาขา</th>
                                ';

                while ($rowDate = $getDate->fetch()) {
                    echo '<th>' . $rowDate['dayCheckName'] . '</th>';
                }
                echo '<th>มาเรียน (คิดเป็น %)</th>
                <th>ขาดเรียน (คิดเป็น %)</th>
                <th>ลา (คิดเป็น %)</th>';
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
            echo "<td>" . (
                ($thisStudentPresent / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100) . "%</td>";
            echo "<td>" . (
                ($thisStudentAbsent / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100) . "%</td>";
            echo "<td>" . (
                ($thisStudentLeave / ($thisStudentPresent + $thisStudentAbsent + $thisStudentLeave)) * 100) . "%</td>";



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