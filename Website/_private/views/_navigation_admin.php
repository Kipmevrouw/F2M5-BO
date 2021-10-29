<ul>
    <li>
        <a href="<?php echo url( 'feed' ) ?>"<?php if ( current_route_is( 'feed' ) ): ?> class="active"<?php endif ?>>Feed</a>
        <a href="<?php echo url( 'gebruikers' ) ?>"<?php if ( current_route_is( 'gebruikers' ) ): ?> class="active"<?php endif ?>>Gebruikers</a>
            <?php if (isLoggedIn()):?>
                <div>
                    <a href="<?php echo url( 'logout' )?>">Log uit</a>
                </div>
            <?php else: ?>
                
                <div>
                    <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'login' ) ): ?> class="active"<?php endif ?>>Log in</a>  
                </div>
            <?php endif;?>
        
    </li>
</ul>