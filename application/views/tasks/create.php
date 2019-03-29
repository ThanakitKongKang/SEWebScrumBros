<h2>
    Create a task for the
    <a href="<?php echo base_url().'projects/show/'.$project->id; ?>"><?php echo $project->name; ?></a>
    project
</h2>
<br>

<?php echo validation_errors('<p class="bg-danger">'); ?>
<?php echo form_open('tasks/create/'.$project->id, ['id' => 'task_form', 'class' => 'form-horizontal']); ?>

    <!-- Name -->
    <div class="form-group">
        <?php
        echo form_label('Name');
        echo form_input([
            'name' => 'name',
            'value' => set_value('name'),
            'class' => 'form-control',
            'placeholder' => 'Enter task name',
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
            'placeholder' => 'Enter task description',
        ]);
        ?>
    </div>

    <!-- Due Date -->
    <div class="form-group">
        <?php
        echo form_label('Due Date');
        echo form_input([
            'name' => 'due_date',
            'value' => set_value('body'),
            'class' => 'form-control',
            'type' => 'date',
        ]);
        ?>
    </div>

    <!-- Submit -->
    <div class="form-group">
        <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Create']); ?>
    </div>
<?php echo form_close(); ?>
