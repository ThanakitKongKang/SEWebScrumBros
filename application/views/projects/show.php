<!-- Left side -->
<div class="col-xs-9">
    <h2><?php echo $project->name; ?></h2>
    <p><i><strong>Date Created:</strong> <?php echo $project->date_created; ?></i></p>
    <br>
    <h4>Description</h4>
    <p><?php echo $project->body; ?></p>
</div>


<!-- Right side -->
<div class="col-xs-3">
    <h3>Actions</h3>

    <div class="btn-group-vertical" role="group" aria-label="...">
        <a href="<?php echo base_url().'tasks/create/'.$project->id; ?>" class="btn btn-default" style="text-align: left">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Create Task
        </a>
        <a href="<?php echo base_url().'projects/edit/'.$project->id; ?>" class="btn btn-default" style="text-align: left">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Edit Project
        </a>
        <a href="<?php echo base_url().'projects/delete/'.$project->id; ?>" class="btn btn-danger" style="text-align: left">
            <small>
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                Delete Project
            </small>
        </a>
    </div>
</div>

<div class="clearfix"></div>
<br>
<div class="col-xs-12">
    <?php $this->load->view('tasks/index.php'); ?>
</div>
