
  <link href="{$BASE_URL}css/pages/taskList.css" rel='stylesheet'>
  
  <div class="container">
    <div class="card card-container">
		<a class='hiper' href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/projectPage.php?projID={$smartyProjID}">Project</a>
          <h2>Iterations</h2>
          <p>This is where you'll find the project iterations</p>
		  {if $smartyIterations|@count != 0}
          <hr class='featurette-divider'>

          <div class='table-responsive'>
            <table class='table iteration table-striped'>
              <thead>
                <tr>
                  <th class='hidden-xs cell-stat'></th>
                  <th>
                    <h3>Iterations</h3>
                  </th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Number of tasks</th>
				  <th class='cell-stat text-center hidden-xs hidden-sm'>Maximum effort</th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Start date</th>
                  <th class='cell-stat text-center hidden-xs hidden-sm'>Due date</th>
				  <th class='cell-stat text-center hidden-xs hidden-sm'>Status</th>
                  <th class='column join button'></th>
                </tr>
              </thead>
              <tbody>
			  {for $i=0 to ($smartyIterations|@count-1)}
                <tr>
                  <td class='hidden-xs text-center'><i class='fa fa-question fa-2x text-primary'></i></td>
                  <td>
                    <h4><a href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/iterationPage.php?itID={$smartyIterations[$i]['iterationid']}">{$smartyIterations[$i]['name']}</a></h4>
                  </td>
                  <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterationsCounter[$i]}</a></td>
				  <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['maximumeffort']}</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['startdate']}</a></td>
                  <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['duedate']}</a></td>
				  <td id = 'completed' class='text-center hidden-xs hidden-sm'>
				  {if $numberTasksCompleted[$i] != $smartyIterationsCounter[$i] || $smartyIterationsCounter[$i] == 0}
				  Active
				  {else}
				  Completed
				  {/if}
				  </td>
                  <td>
				  {if $numberTasksCompleted[$i] != $smartyIterationsCounter[$i] || $smartyIterationsCounter[$i] == 0}
					<a id="editIteration" class="btn btn-warning" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/editIteration.php?itID={$smartyIterations[$i]['iterationid']}">Edit Iteration</a>
				  {/if}
                  </td>
                </tr>
				{/for}
              </tbody>
            </table>
          </div>
		  {/if}
         <a id="addIteration" role="button" class="btn btn-success" href="https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/createIteration.php?projID={$smartyProjID}">Add Iteration</a>
	</div>
  </div>
</div>