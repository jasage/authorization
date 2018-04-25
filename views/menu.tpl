    <!-- MENU -->
    <div class="menu">
        <ul class="nav">
            <li><a href="?controller=user&action=home">Home</a></li>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li class="dropdown">
                <a href="#">
                    {if empty($users.name)} 
                    {$users.email}
                    {else}
                    {$users.name}
                    {/if}
                </a>
                <div class="dropdown-content">
                    <a href="?controller=user&action=profile">Profile</a>
                    <a href="?controller=user&action=changePass">Change password</a>
                    <a href="?controller=user&action=logout" style="border-top: solid 1px #333">Log out</a>    
                </div>
            </li>
        </ul>  
    </div>
    <!-- END MENU -->