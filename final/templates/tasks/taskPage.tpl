<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">

<div class="container">
    <div class="card card-container">
        <div class="table-container">
            <div class="info-box">
                <div class="info-box">
                <p class="text-style-3">{$smartyInfo['0']['name']}</p>
                <p class="text-style-5">{$smartyInfo['0']['description']}</p>
                <hr class="featurette-divider">
                <div class="table-responsive">
                    <table class="task table">
                        <thead>
                            <tr>
                                <th class="column state">State</th>
                                <th class="column priority">Priority</th>
                                <th class="column effort">Effort</th>
                                <th class="column workers">Workers</th>
                                <th class="column join button"></th>

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
                    <button type="button" class="btn btn-success btn-sm">Request to join task</button>
                    <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/editTask.php?taskID={$smartyTaskID}" class="btn btn-warning btn-sm">Edit Task</a>
					<a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/completeTask.php?taskID={$smartyTaskID}" class="btn btn-danger btn-sm">Conclude Task</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>