<h2>Edit Project</h2>

<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('projects/edit/'.$project->id, ['id' => 'project_form', 'class' => 'form-horizontal']); ?>

    <!-- Name -->
    <div class="form-group">
        <?php
        echo form_label('Name');
        echo form_input(['name' => 'name', 'value' => set_value('name', $project->name), 'class' => 'form-control']);
        ?>
    </div>

    <!-- Description -->
    <div class="form-group">
        <?php
        echo form_label('Description');
        echo form_textarea(['name' => 'body', 'value' => set_value('body', $project->body), 'class' => 'form-control']);
        ?>
    </div>

    <!-- Submit -->
    <?php echo form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary pull-left']); ?>
<?php echo form_close(); ?>

<a href="<?php echo base_url().'projects/delete/'.$project->id; ?>" class="btn btn-xs btn-danger pull-right">Delete</a>
