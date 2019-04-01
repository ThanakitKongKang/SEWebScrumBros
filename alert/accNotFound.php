
<?php if (!empty($_SESSION["accNotFound"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จไม่สำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger shadow-sm p-3 mb-5 rounded">
        <div class="container text-center">ไม่สำเร็จ ชื่อหรือรหัสผ่านที่คุณป้อน
            <span class='text-danger font-weight-bold'>ไม่ตรงกับบัญชีผู้ใช้ใดๆ</span>
        </div>

    </div>
    <?php 
    unset($_SESSION["accNotFound"]);
}

?>