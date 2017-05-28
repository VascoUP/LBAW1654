<div class="projRqInvite">
    <p>
        <span class="identUsername">{$smartyProjRequestedInvite['username']}</span>
        requested to participate in
        <span class="identProject">{$smartyProjRequestedInvite['projectname']}</span>
    </p>
    <p class="projID" hidden>{$smartyProjRequestedInvite['projectid']}</p>
    <p class="userID" hidden>{$smartyProjRequestedInvite['userid']}</p>
    <a href="#" class="pull-left projAccept">Yes</a>
    <a href="#" class="pull-right projReject">No</a>
</div>