<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over ons</a>
        <a href="<?php echo url( 'Wordtransformer' ) ?>"<?php if ( current_route_is( 'Wordtransformer' ) ): ?> class="active"<?php endif ?>>Word Transformer!</a>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
            <div>
                <a href="<?php echo url( 'signup' ) ?>"<?php if ( current_route_is( 'signup' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
            </div>
            <div>
                <a href="<?php echo url( 'Login' ) ?>"<?php if ( current_route_is( 'Login' ) ): ?> class="active"<?php endif ?>>Log in</a>  
            </div>
        
    </li>
</ul>