<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over ons</a>
        <a href="<?php echo url( 'Wordtransformer' ) ?>"<?php if ( current_route_is( 'Wordtransformer' ) ): ?> class="active"<?php endif ?>>Word Transformer!</a>
        <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
    </li>
</ul>