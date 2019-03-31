
<?php if (!empty($_SESSION["accNotFound"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จไม่สำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger p-3">
        <div class="container text-center">ไม่สำเร็จ ชื่อหรือรหัสผ่าน
            <span class='text-danger'>ไม่ถูกต้อง</span>
        </div>

    </div>
    <?php 
    unset($_SESSION["accNotFound"]);
}

?>