<?php if (!empty($_SESSION["successLogin"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-success p-3 text-center shadow-sm p-3 mb-5 rounded">
        <div class="container">Login successful.
        </div>
    </div>
    <?php 
    unset($_SESSION["successLogin"]);
} ?>