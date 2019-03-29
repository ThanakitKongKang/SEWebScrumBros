<h2>Create a project</h2>

<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('projects/create', ['id' => 'project_form', 'class' => 'form-horizontal']); ?>

    <!-- Name -->
    <div class="form-group">
        <?php
        echo form_label('Name');
        echo form_input([
            'name' => 'name',
            'value' => set_value('body'),
            'class' => 'form-control',
            'placeholder' => 'Enter project name',
        ]);
        ?>
    </div>

    <!-- Description -->
    <div class="form-group">
        <?php
        echo form_label('Description');
        echo form_textarea([
            'name' => 'body',
            'value' => set_value('body'),
            'class' => 'form-control',
            'placeholder' => 'Enter project description',
        ]);
        ?>
    </div>

    <!-- Submit -->
    <div class="form-group">
        <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Create']); ?>
    </div>
<?php echo form_close(); ?>
