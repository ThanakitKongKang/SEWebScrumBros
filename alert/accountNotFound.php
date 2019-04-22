<?php if (!empty($_SESSION["accountNotFound"])) {
    //alert แจ้งเตือนเข้าสู่ระบบสำเร็จไม่สำเร็จ ต้องลบ session เพราะให้มันขึ้นครั้งเดียว
    ?>

<div class="alert alert-danger shadow-sm p-3 mb-5 rounded">
    <div class="container text-center">Failed, username or password is
        <span class='text-danger'>incorrect. </span>
      
    </div>

</div>
<?php 
unset($_SESSION["accountNotFound"]);
}

?>