<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
        <script src="<?php echo base_url().'assets/js/jquery.js'; ?>" charset="utf-8"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>" charset="utf-8"></script>
        <script src="<?php echo base_url().'assets/js/app.js'; ?>" charset="utf-8"></script>
    </head>

    <body>
        <?php $this->load->view('layouts/navbar.php'); ?>

        <!-- Container -->

        <div class="container">
            <?php if ($this->session->flashdata('flash_success')): ?>
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('flash_success'); ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('flash_danger')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('flash_danger'); ?>
                </div>
            <?php endif; ?>

            <div class="col-xs-3">
                <?php $this->load->view('users/login'); ?>
            </div>
            <div class="col-xs-9">
                <?php $this->load->view($main_view); ?>
            </div>
        </div>
    </body>
</html>
