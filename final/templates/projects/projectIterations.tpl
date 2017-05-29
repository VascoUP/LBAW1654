<link href="{$BASE_URL}css/pages/taskList.css" rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{$BASE_URL}javascript/templates/paginatedTables.js"></script>

<div id='profile-content' class='profile-content'>
  <h2>Iterations</h2>
  <p>This is where you'll find the project iterations</p>
  {if $smartyIterations|@count != 0}
  <hr class='featurette-divider'>
  <div class='table-responsive'>
    <table class='table iteration table-striped' id='page_table'>
      <thead>
        <tr>
          <th>
            Iterations
          </th>
          <th class='cell-stat text-center hidden-xs hidden-sm'>Number of tasks</th>
          <th class='cell-stat text-center hidden-xs hidden-sm'>Maximum effort</th>
          <th class='cell-stat text-center hidden-xs hidden-sm'>Start date</th>
          <th class='cell-stat text-center hidden-xs hidden-sm'>Due date</th>
          <th class='cell-stat text-center hidden-xs hidden-sm'>Status</th>
		  {if $userIsCoord}
          <th class='column join button'></th>
		  {/if}
        </tr>
      </thead>
      <tbody>
      {for $i=0 to ($smartyIterations|@count-1)}
        <tr>
          <td>
            <h4><a href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/iteration/iterationPage.php?projID={$smartyProjID}&itID={$smartyIterations[$i]['iterationid']}">{$smartyIterations[$i]['name']}</a></h4>
          </td>
          <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterationsCounter[$i]}</a></td>
          <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['maximumeffort']}</a></td>
          <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['startdate']}</a></td>
		  {if $smartyIterations[$i]['duedate']}
          <td class='text-center hidden-xs hidden-sm'><a>{$smartyIterations[$i]['duedate']}</a></td>
          {else}
          <td class='text-center hidden-xs hidden-sm'><a>not set</a></td>
		  {/if}
          <td id = 'completed' class='text-center hidden-xs hidden-sm'>
        {if $numberTasksCompleted[$i] != $smartyIterationsCounter[$i] || $smartyIterationsCounter[$i] == 0}
          Active
        {else}
          Completed
        {/if}
          </td>
          <td>
        {if $userIsCoord && ($numberTasksCompleted[$i] != $smartyIterationsCounter[$i] || $smartyIterationsCounter[$i] == 0) }
            <a id="editIteration" class="btn btn-warning" href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/iteration/editIteration.php?projID={$smartyProjID}&itID={$smartyIterations[$i]['iterationid']}">Edit <br> Iteration</a>
        {/if}
          </td>
        </tr>
    {/for}
      </tbody>
    </table>
  </div>
  {/if}
  {if $userIsCoord}
  <a id="addIteration" role="button" class="btn btn-success" href="https://gnomo.fe.up.pt{$BASE_URL}pages/project/iteration/createIteration.php?projID={$smartyProjID}">Add Iteration</a>
  {/if}
</div>
