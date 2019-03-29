<h2>Register</h2>
<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('users/register', ['id' => 'register_form', 'class' => 'form-horizontal']); ?>

    <!-- First name -->
    <div class="form-group">
        <?php
        echo form_label('First name');
        echo form_input([
            'name' => 'first_name',
            'value' => set_value('first_name'),
            'class' => 'form-control',
            'placeholder' => 'Enter first name',
        ]);
        ?>
    </div>

    <!-- Last name -->
    <div class="form-group">
        <?php
        echo form_label('Last name');
        echo form_input([
            'name' => 'last_name',
            'value' => set_value('last_name'),
            'class' => 'form-control',
            'placeholder' => 'Enter last name',
        ]);
        ?>
    </div>

    <!-- Username -->
    <div class="form-group">
        <?php
        echo form_label('Username');
        echo form_input([
            'name' => 'username',
            'value' => set_value('username'),
            'class' => 'form-control',
            'placeholder' => 'Enter username',
        ]);
        ?>
    </div>

    <!-- Email -->
    <div class="form-group">
        <?php
        echo form_label('Email');
        echo form_input([
            'name' => 'email',
            'value' => set_value('email'),
            'class' => 'form-control',
            'placeholder' => 'Enter email',
            'type' => 'email',
        ]);
        ?>
    </div>

    <!-- Password -->
    <div class="form-group">
        <?php
        echo form_label('Password');
        echo form_password([
            'name' => 'password',
            'value' => set_value('password'),
            'class' => 'form-control',
            'placeholder' => 'Enter password',
        ]);
        ?>
    </div>

    <!-- Submit -->
    <div class="form-group">
        <?php echo form_submit(['name' => 'submit', 'value' => 'Register', 'class' => 'btn btn-primary']); ?>
    </div>
<?php echo form_close(); ?>
