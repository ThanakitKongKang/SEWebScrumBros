<?php  //include from root php's style
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/SoftEn2019/Sec2/ScrumBros/head.php";
include_once($path);
//ใช้แล้วเซ็ตค่า path คืน

?>

<head>


    
</head>

<body>
  <div class="container">
  <div class="row">
      <div class="col-7 col-md-5">

        <label>Select with Search</label>
        <select class="selectpicker" data-live-search="true">
          <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
          <option data-tokens="mustard">Burger, Shake and a Smile</option>
          <option data-tokens="frosting">Sugar, Spice and all things nice</option>
        </select>

        
      </div>
  </div>
</div>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js'></script>

</body>

<script>
    $(function() {
        $('select').selectpicker();
    });
</script>

</html>