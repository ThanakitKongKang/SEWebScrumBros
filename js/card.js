  
    $('.present').on('click', function() {
        var attendanceStatus = $('#attendanceStatus').val();
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
            success: function(result) {
                window.location.href = go2 + "&attendanceStatus=" + attendanceStatus;
            }
        });
    });

    $('.absent').on('click', function() {

    });
    
    $('.leave').on('click', function() {

    });