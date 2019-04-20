
var countStatusPresent = $('#countStatusPresent').val();
var countStatusAbsent = $('#countStatusAbsent').val();
var countStatusLeave = $('#countStatusLeave').val();
if (countStatusPresent != 0) {
    $('.present').on('click', function () {
        var attendanceStatus = 'present';
        var parts = window.location.search.substr(1).split("&");
        var $_GET = {};
        for (var i = 0; i < parts.length; i++) {
            var temp = parts[i].split("=");
            $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
        }
        var go2 = "http://localhost/SoftEn2019/Sec2/ScrumBros/summary.php?subjectCode=" +
            $_GET['subjectCode'] +
            "&year=" + $_GET['year'] +
            "&semester=" + $_GET['semester'] +
            "&section=" + $_GET['section'] +
            "&date=" + $_GET['date'];
        $.ajax({
            type: "GET",
            attendanceStatus: "attendanceStatus=" + attendanceStatus,
            success: function (result) {
                window.location.href = go2 + "&attendanceStatus=" + attendanceStatus;
            }
        });
    });
}
if (countStatusAbsent != 0) {
    $('.absent').on('click', function () {
        var attendanceStatus = 'absent';
        var parts = window.location.search.substr(1).split("&");
        var $_GET = {};
        for (var i = 0; i < parts.length; i++) {
            var temp = parts[i].split("=");
            $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
        }
        var go2 = "http://localhost/SoftEn2019/Sec2/ScrumBros/summary.php?subjectCode=" +
            $_GET['subjectCode'] +
            "&year=" + $_GET['year'] +
            "&semester=" + $_GET['semester'] +
            "&section=" + $_GET['section'] +
            "&date=" + $_GET['date'];
        $.ajax({
            type: "GET",
            attendanceStatus: "attendanceStatus=" + attendanceStatus,
            success: function (result) {
                window.location.href = go2 + "&attendanceStatus=" + attendanceStatus;
            }
        });
    });
}
if (countStatusLeave != 0) {
    $('.leave').on('click', function () {
        var attendanceStatus = 'leave';
        var parts = window.location.search.substr(1).split("&");
        var $_GET = {};
        for (var i = 0; i < parts.length; i++) {
            var temp = parts[i].split("=");
            $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
        }
        var go2 = "http://localhost/SoftEn2019/Sec2/ScrumBros/summary.php?subjectCode=" +
            $_GET['subjectCode'] +
            "&year=" + $_GET['year'] +
            "&semester=" + $_GET['semester'] +
            "&section=" + $_GET['section'] +
            "&date=" + $_GET['date'];
        $.ajax({
            type: "GET",
            attendanceStatus: "attendanceStatus=" + attendanceStatus,
            success: function (result) {
                window.location.href = go2 + "&attendanceStatus=" + attendanceStatus;
            }
        });
    });
}

if (countStatusPresent == 0) {
    $('.present').on('click', function () {
        alert('ไม่สามารถทำรายการได้ ไม่มีนักศึกษาที่มาเรียน');
    });
}
if (countStatusAbsent == 0) {
    $('.absent').on('click', function () {
        alert('ไม่สามารถทำรายการได้ ไม่มีนักศึกษาขาดเรียน');
    });
}

if (countStatusLeave == 0) {
    $('.leave').on('click', function () {
        alert('ไม่สามารถทำรายการได้ ไม่มีนักศึกษาลา');
    });
}