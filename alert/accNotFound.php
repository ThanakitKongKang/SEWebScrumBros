
<?php if (!empty($_SESSION["accNotFound"])) {
        //alert แจ้งเตือนเข้าสู่ระบบสำเร็จไม่สำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger shadow-sm p-3 mb-5 rounded">
        <div class="container text-center">Failed, 
            <span class='text-danger font-weight-bold'>User not found.</span>
        </div>

    </div>
    <?php 
    unset($_SESSION["accNotFound"]);
}

?>