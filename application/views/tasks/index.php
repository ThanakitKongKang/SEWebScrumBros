<h2>Incomplete Tasks</h2>
<?php $this->load->view('tasks/table', ['tasks' => $incomplete_tasks, 'type' => 'incomplete']); ?>
<br>

<h2>Complete Tasks</h2>
<?php $this->load->view('tasks/table', ['tasks' => $complete_tasks, 'type' => 'complete']); ?>
