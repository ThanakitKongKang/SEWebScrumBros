<?php if (!empty($_SESSION["accountLocked"])) {
        //alert แจ้งเตือนล็อกบัญชี ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
        ?>

    <div class="alert alert-danger shadow-sm p-3 mb-5 rounded">
        <div class="container text-center">Failed, after you have made 
            <span class='text-danger'>3 unsuccessful attempts</span>
            <br><span class='text-danger'>your account is restricted!!</span>, please contact support.
        </div>

    </div>
    <?php 
    unset($_SESSION["accountLocked"]);
}
?>