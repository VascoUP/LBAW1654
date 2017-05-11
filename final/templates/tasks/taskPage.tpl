<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <div class="table-container">
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/iterationPage.php?itID={$smartyIterationID}"> Iteration </a>
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/projectIterations.php?projID={$smartyProjectID}"> Iterations </a>
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjectID}"> Project </a>
            <div class="info-box">
                <div class="info-box">
                <h2>{$smartyInfo['0']['name']}</h2>
                <p>{$smartyInfo['0']['description']}</p>
                <hr class="featurette-divider">
                <div class="table-responsive">
                    <table class="task table">
                        <thead>
                            <tr>
                                <th class="column state">State</th>
                                <th class="column priority">Priority</th>
                                <th class="column effort">Effort</th>
                                <th class="column workers">Workers</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- Tasks -->
                            <tr>
                                <td class="task-info state">{$smartyInfo['0']['status']}</td>
                                <td class="task-info priority">
								{if $smartyInfo['0']['priority'] < 5}
								Low
								{elseif $smartyInfo['0']['priority'] > 5 && $smartyInfo['0']['priority'] < 7}
								Medium
								{else}
								High
								{/if}
								</td>
                                <td class="task-info effort">{$smartyInfo['0']['effort']}</td>
                                <td class="task-info workers">{$smartyWorkers}</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="task-userbuttons">
				{if $smartyTaskValue == 0}
                    <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/editTask.php?taskID={$smartyTaskID}" class="btn btn-info btn-sm">Edit Task</a>
				{/if}
					<a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/projects/createForumTask.php?projID={$smartyProjectID}&taskID={$smartyTaskID}" class="btn btn-primary btn-sm">Comment Task</a>
					<a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/completeTask.php?taskID={$smartyTaskID}" class="btn btn-success btn-sm">Conclude Task</a>
					<a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/leaveTask.php?taskID={$smartyTaskID}" class="btn btn-warning btn-sm">Leave Task</a>
					<a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteTask.php?taskID={$smartyTaskID}" class="btn btn-danger btn-sm">Remove Task</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>