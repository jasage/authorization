    <!-- HEADER -->
    <div class="header">
        <span class="head">Personal Page</span>
        <span class="name">
            {if empty($users.name)} 
            {$users.email}
            {else}
            {$users.name}
            {/if}
        </span>
    </div>
    <!-- END HEADER -->