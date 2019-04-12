<?php if (!empty($_SESSION["failedLogin"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จไม่สำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger shadow-sm p-3 mb-5 rounded">
        <div class="container text-center">Failed, username or password is
            <span class='text-danger'>incorrect. </span>
            <br>you have <strong><?= $_SESSION["failedLogin"] ?> </strong> chances, then <span class='text-danger'>your account will be restricted</span>
        </div>

    </div>
    <?php 
    unset($_SESSION["failedLogin"]);
}

?>