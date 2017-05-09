<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
	<div class="card card-container-it">
		<div class="table-container">
			<div class="project-info-box">
				<p class="text-style-2">{$smartyIterations['0']['name']}</p>
				<p class="text-style-5">{$smartyIterations['0']['description']}</p>
				<br>
				<p class="text-style-6">This is where you'll find the project tasks for {$smartyIterations['0']['name']}</p>
				<a id="editIteration" class="btn btn-warning" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/editIteration.php?itID={$smartyID}">Edit Iteration</a>
				{if $smartyTasks|@count != 0}
				<hr class="featurette-divider">
				<div class="table-responsive">
					<table class="task table">
                    <thead>
                        <tr>
                            <th class="task meta line"></th>
                            <th>
                            <h3>Tasks</h3>
                            </th>
                            <th class="column state">State</th>
                            <th class="column priority">Priority</th>
                            <th class="column workers">Workers</th>
                            <th class="column join button"></th>
                        </tr>
                    </thead>
					
                    <tbody>
					{for $i=0 to ($smartyTasks|@count-1)}
                        <!-- Tasks -->
                        <tr>
                            <td class="task entry"><i class="fa fa-question fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?taskID={$smartyTasks[$i]['taskid']}">{$smartyTasks[$i]['name']}</a><br><small>{$smartyTasks[$i]['description']}</small></h4>
                            </td>
                            <td class="task-info state">{$smartyTasks[$i]['taskstatus']}</td>
                            <td class="task-info priority">{$smartyTasks[$i]['priority']}</td>
                            <td class="task-info workers">{$smartyNumberUsers[$i]}</td>
                            <td> <button class="btn btn-warning">Request to join task</button> </td>
                        </tr>
					{/for}
                    </tbody>
					</table>
				</div>
				{/if}
				<a id="addTaskIteration" role="button" class="btn btn-success" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/createTask.php?itID={$smartyID}">Add Task</a>
			</div>
		</div>
	</div>
</div>
</div>