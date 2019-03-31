<?php if (!empty($_SESSION["accountLocked"])) {
        //alert แจ้งเตือนล็อกบัญชี ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger p-3">
        <div class="container text-center">ไม่สำเร็จ ท่านกรอกชื่อหรือรหัสผ่าน
            <span class='text-danger'>ไม่ถูกต้อง 3 ครั้ง</span>
            <br><span class='text-danger'>บัญชีของท่านถูกล็อก</span> กรุณาติดต่อเจ้าหน้าที่
        </div>

    </div>
    <?php 
    unset($_SESSION["accountLocked"]);
}
?>