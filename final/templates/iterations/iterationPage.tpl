<link href="{$BASE_URL}css/pages/forms.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/taskList.css" rel="stylesheet">
<link href="{$BASE_URL}css/pages/search.css" rel="stylesheet">
<link href="{$BASE_URL}css/templates/projectsUsers.css" rel="stylesheet">
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel="stylesheet">

<div class="container">
    <div class='row profile'>
        {include file="{$BASE_DIR}/templates/projects/projectSideBar.tpl"}
        <div class='col-md-9'>
	        <div class="card card-container-it">
		        <div class="table-container">
                    <a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/projectIterations.php?projID={$smartyIterations['0']['projectid']}"> Iterations </a>
                    <a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyIterations['0']['projectid']}"> Project </a>
                    <div class="project-info-box">
                        <h2>{$smartyIterations['0']['name']}</h2>
                        <p>{$smartyIterations['0']['description']}</p>
                    {if $smartyTasks|@count != $smartyNumberTasks || $smartyTasks|@count == 0}
                        <a id="editIteration" class="btn btn-warning" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/editIteration.php?projID={$smartyProjID}&itID={$smartyID}">Edit Iteration</a>
                    {/if}
                    {if $smartyTasks|@count != 0}
                        <hr class="featurette-divider">
                        <div class="table-responsive">
                            <table class="task table">
                                <thead>
                                    <tr>
                                        <th class="task meta line"></th>
                                        <th><h3>Tasks</h3></th>
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
                                            <h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/task/taskPage.php?projID={$smartyProjID}&taskID={$smartyTasks[$i]['taskid']}">{$smartyTasks[$i]['name']}</a><br><small>{$smartyTasks[$i]['description']}</small></h4>
                                        </td>
                                        <td class="task-info state">{$smartyTasks[$i]['taskstatus']}</td>
                                        <td class="task-info priority">{$smartyTasks[$i]['priority']}</td>
                                        <td class="task-info workers">{$smartyNumberUsers[$i]}</td>
                                        <td> 
                                            <a type="button" href="https://gnomo.fe.up.pt/~lbaw1654/final/actions/projects/joinTask.php?projID={$smartyProjID}&taskID={$smartyTasks[$i]['taskid']}" class="btn btn-primary btn-sm">Join task</a> 
                                        </td>
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
        </div>
    </div>
</div>