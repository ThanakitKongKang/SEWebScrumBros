<?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/SoftEn2019/Sec2/ScrumBros/model/getSubject.php";
            include($path);
            while ($row = $stmt->fetch()) {
                ?>
                <a href="class.php?subjectCode=<?= $_GET['subjectCode'] ?>&year=<?= $_GET['year'] ?>&semester=<?= $_GET['semester'] ?>&section=<?= $_GET['section'] ?>" style="text-decoration:none">
                    <div style="height:18rem;position:relative;width:100%">
                        <div class="rounded-lg" style="background-image: url('https://lh3.googleusercontent.com/-OKK_uVC0VcI/VN0oi2BxSFI/AAAAAAAAASw/RwpeLW4SPsw/w984-h209-no/12_pencils.jpg');background-repeat:no-repeat;height:100%;left:0;position:absolute;top:0;width:100%;background-size: cover;"></div>
                        <div class="rounded-lg" style="background-color:rgba(32,33,36,0.6);height:100%;left:0;position:absolute;top:0;width:100%;"></div>
                        <div style="padding:2.4rem;position:relative;">
                            <div style="font-family: 'Kanit', sans-serif;">
                                <h1 style="font-size:3.6rem;font-weight:500;line-height:4.4rem;color:#fff"><?= $row["subject_code"] . " " . $row['subjectName_Th'] ?></h1>
                                <div style="font-size:2.2rem;font-weight:400;line-height:5rem;color:#fff"><?= $row["subjectName_En"] ?></div>
                                <div style="font-size:1.5rem;font-weight:400;line-height:2rem;color:#fff">section : <?=$row["section"]?></div>
                                <div style="font-size:1.5rem;font-weight:400;line-height:2rem;color:#fff"><?="ภาคการศึกษาที่ " . $row["Semester"] . " ปีการศึกษา " . $row['year'] ?></div>
                            </div>
                        </div>
                    </div>
                </a>


            <?php
        } ?>