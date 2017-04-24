<link href="../../css/pages/profile.css" rel='stylesheet'>
<link href="../../css/bootstrap/bootstrap-social.css" rel='stylesheet'>

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
                    {if $smartyNumUsers == 1}
						{$smartyNumUsers} user
					{else}
						{$smartyNumUsers} users
					{/if}
                </div>
            </div>

            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class='profile-usermenu'>
                <ul class='nav'>
                    <li class='active'>
                        <a href='#'>
                        Description </a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/general/projectEdit.php?projID={$smartyProjID}'>
                        Edit Project </a>
                    </li>
					<li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/project/iteration/projectIterations.php' target='_blank'>
                        Iterations</a>
                    </li>
                    <li>
                        <a href='https://gnomo.fe.up.pt/~lbaw1654/proto/pages/forum/projectForum.php' target='_blank'>
                        Forum</a>
                    </li>
					<li>
                        <a href='#' target='_blank'>
                        Statistics</a>
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