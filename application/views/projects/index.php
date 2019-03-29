<h2>Projects</h2>

<a href="<?php echo base_url().'projects/create'; ?>" class="btn btn-primary pull-right">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    Create project
</a>
<br>
<br>

<?php if (!count($projects)): ?>
    <div class="alert alert-info">
        You currently have no projects.
    </div>

<?php else: ?>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td>
                        <a href="<?php echo base_url().'projects/show/'.$project->id; ?>">
                            <?php echo $project->name ?>
                        </a>
                    </td>
                    <td><?php echo $project->body ?></td>
                    <td>
                        <a href="<?php echo base_url().'projects/edit/'.$project->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Edit this project">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a href="<?php echo base_url().'projects/delete/'.$project->id; ?>"
                            data-toggle="tooltip"
                            data-placement="bottom"
                            title="Delete this project">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
