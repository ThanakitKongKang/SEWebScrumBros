<?php if ($this->session->userdata('logged_in')): ?>
    <h2>Side Panel</h2>

<?php else: ?>
    <h2>Login</h2>
    <?php echo $this->session->flashdata('errors'); ?>
    <?php echo form_open('users/login', ['id' => 'login_form', 'class' => 'form-horizontal']); ?>

        <!-- Username -->
        <div class="form-group">
            <?php
            echo form_label('Username');
            echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'Enter username']);
            ?>
        </div>

        <!-- Password -->
        <div class="form-group">
            <?php
            echo form_label('Password');
            echo form_password(['class' => 'form-control', 'name' => 'password', 'placeholder' => 'Enter password']);
            ?>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Login']); ?>
        </div>
    <?php echo form_close(); ?>
<?php endif; ?>
