<link href="{$BASE_URL}css/pages/profile.css" rel='stylesheet'>
<link href="{$BASE_URL}css/bootstrap/bootstrap-social.css" rel='stylesheet'>

<div class='container'>

        <div class='row profile'>
            <div class='col-md-3'>

        <div class='profile-sidebar'>
            <!-- SIDEBAR USER TITLE -->
            <div class='profile-usertitle'>
                <div class='profile-usertitle-name'>
                    {$smartyProjInfo['0']['name']}
                </div>
                <div class='profile-usertitle-email'>
                    {if $smartyProjInfo['0']['countcoord'] == 1}
						{$smartyProjInfo['0']['countcoord']} coordinator
					{else}
						{$smartyProjInfo['0']['countcoord']} coordinators
					{/if}
                </div>
				
				<div class='profile-usertitle-email'>
                    {if $smartyProjInfo['0']['countusers'] == 1}
						{$smartyProjInfo['0']['countusers']} collaborator
					{else}
						{$smartyProjInfo['0']['countusers']} collaborators
					{/if}
                </div>
				<br>				
				<div class='profile-usertitle-email'>
					Main Coordinator: {$smartyCoord}
                </div>
            </div>

            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class='profile-usermenu'>
                <ul class='nav'>
                    <li class='active'>
                        <a href='#'><i class='glyphicon glyphicon-home'></i>
                        Description </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/general/projectEdit.php?projID={$smartyProjID}'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Edit Project </a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/iteration/projectIterations.php?projID={$smartyProjID}'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Iterations </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/final/pages/project/forum/projectForum.php'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Forum </a>
                    </li>
					<li>
                        <a href='#' target='_blank'>
                        <i class='glyphicon glyphicon-ok'></i>
                        Statistics </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>

    </div>
   
        <div class='col-md-9'>
            <div id='profile-content' class='profile-content'>
                    <h2>
                        Description
                    </h2>
                    <p class='summary'>
						{$smartyProjInfo['0']['description']}
                    </p>
            </div>
        </div>

</div>
</div>