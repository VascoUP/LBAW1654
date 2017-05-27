<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<script src="{$BASE_URL}javascript/users/confirmDelete.js"></script>

<div class="container">
    <div class='row profile'>
        {include file="{$BASE_DIR}/templates/projects/projectSideBar.tpl"}
        <div class='col-md-9'>
            <div class="card card-container">
                <div class="table-container">
                    <a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/iterationPage.php?projID={$smartyProjID}&itID={$smartyIterationID}"> Iteration </a>
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
                        {if $smartyTaskValue == 0 && $smartyPermission}
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/editTask.php?projID={$smartyProjID}&taskID={$smartyTaskID}" class="btn btn-default btn-sm">Edit Task</a>
                        {/if}
                        {if $smartyPermission}
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/createForumTask.php?projID={$smartyProjectID}&taskID={$smartyTaskID}" class="btn btn-info btn-sm">Comment Task</a>
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/completeTask.php?projID={$smartyProjID}&taskID={$smartyTaskID}" class="btn btn-success btn-sm">Conclude Task</a>
                        {/if}
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/admin/report.php?projID={$smartyProjID}&taskID={$smartyTaskID}" class="btn btn-warning btn-sm">Report task</a>
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/leaveTask.php?projID={$smartyProjID}&taskID={$smartyTaskID}" class="btn btn-primary btn-sm" id="leaveTask">Leave Task</a>
                        {if $smartyPermission}	
                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/deleteTask.php?projID={$smartyProjID}&taskID={$smartyTaskID}" class="btn btn-danger btn-sm" id="deleteTask">Remove Task</a>
                        {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>