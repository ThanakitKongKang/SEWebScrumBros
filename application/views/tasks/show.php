<!-- Left side -->
<div class="col-xs-9">
    <h2><strong>Task:</strong> <?php echo $task->name; ?></h2>
    <h4>
        <strong>Project:</strong>
        <a href="<?php echo base_url().'projects/show/'.$project->id; ?>"><?php echo $project->name; ?></a>
    </h4>
    <p><i><strong>Date Created:</strong> <?php echo $task->date_created; ?></i></p>
    <p><i><strong>Due Date:</strong> <?php echo $task->due_date; ?></i></p>
    <br>
    <h4>Description</h4>
    <p><?php echo $task->body; ?></p>
</div>


<!-- Right side -->
<div class="col-xs-3">
    <h3>Actions</h3>

    <div class="btn-group-vertical" role="group" aria-label="...">
        <a href="<?php echo base_url().'tasks/create/'.$project->id; ?>" class="btn btn-default" style="text-align: left">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Create Task
        </a>
        <a href="<?php echo base_url().'tasks/toggle_completion/'.$task->id; ?>" class="btn btn-default" style="text-align: left">
            <small>
                <span class="glyphicon glyphicon-<?php echo $task->is_complete ? 'check' : 'unchecked'?>" aria-hidden="true"></span>
                Mark <?php echo $task->is_complete ? 'incomplete' : 'complete'?>
            </small>
        </a>
        <a href="<?php echo base_url().'tasks/edit/'.$task->id; ?>" class="btn btn-default" style="text-align: left">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Edit Task
        </a>
        <a href="<?php echo base_url().'tasks/delete/'.$task->id; ?>" class="btn btn-danger" style="text-align: left">
            <small>
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                Delete Task
            </small>
        </a>
    </div>
</div>
