<?php if (!count($tasks)): ?>
    <div class="alert alert-info">
        You currently have no <?php echo $type ?> tasks.
    </div>

<?php else: ?>
    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr class="<?php echo $type == 'complete' ? 'info' : ''?>">
                    <td>
                        <a href="<?php echo base_url().'tasks/toggle_completion/'.$task->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Mark task as <?php echo $task->is_complete ? 'incomplete' : 'complete'?>"
                        >
                            <span class="glyphicon glyphicon-<?php echo $task->is_complete ? 'check' : 'unchecked'?>" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'tasks/show/'.$task->id; ?>">
                            <?php echo $task->name ?>
                        </a>
                    </td>
                    <td><?php echo $task->body ?></td>
                    <td><?php echo $task->due_date ?></td>
                    <td>
                        <a href="<?php echo base_url().'tasks/edit/'.$task->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Edit this task">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="<?php echo base_url().'tasks/delete/'.$task->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Delete this task">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
