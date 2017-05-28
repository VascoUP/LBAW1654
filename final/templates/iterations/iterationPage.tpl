<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div id='profile-content' class='profile-content'>
    <div class="table-container">
        <div class="project-info-box">
            <h2>{$smartyIterations['0']['name']}</h2>
            <p>{$smartyIterations['0']['description']}</p>
        {if $smartyTasks|@count != $smartyNumberTasks || $smartyTasks|@count == 0}
            <a id="editIteration" class="btn btn-warning" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/editIteration.php?projID={$smartyProjID}&itID={$smartyID}">Edit Iteration</a>
        {/if}
        {if $smartyTasks|@count != 0}
            <hr class="featurette-divider">
            <div class="table-responsive">
                <table class="task table" id="page_table">
                    <thead>
                        <tr>
                            <th class="task meta line"></th>
                            <th class="main_column">Tasks</th>
                            <th class="column state">State</th>
                            <th class="column priority">Priority</th>
                            <th class="column workers">Workers</th>
							{if $collaborator || $userIsCoord}
                            <th class="column join button"></th>
							{/if}
                        </tr>
                    </thead>

                    <tbody>
                    {for $i=0 to ($smartyTasks|@count-1)}
                        <!-- Tasks -->
                        <tr>
                            <td class="task entry"><i class="fa fa-question fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?projID={$smartyProjID}&taskID={$smartyTasks[$i]['taskid']}">{$smartyTasks[$i]['name']}</a><br><small>{$smartyTasks[$i]['description']}</small></h4>
                            </td>
                            <td class="task-info state">{$smartyTasks[$i]['taskstatus']}</td>
                            <td class="task-info priority">{$smartyTasks[$i]['priority']}</td>
                            <td class="task-info workers">{$smartyNumberUsers[$i]}</td>
							{if $collaborator || $userIsCoord}
                            <td>
                                <a href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/joinTask.php?projID={$smartyProjID}&taskID={$smartyTasks[$i]['taskid']}" class="btn btn-primary btn-sm">Join task</a>
                            </td>
							{/if}
                        </tr>
                    {/for}
                    </tbody>
                </table>
            </div>
        {/if}
        {if $smartyPermission}
            <a id="addTaskIteration" role="button" class="btn btn-success" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/createTask.php?projID={$smartyProjID}&itID={$smartyID}">Add Task</a>
        {/if}
        </div>
    </div>
</div>
