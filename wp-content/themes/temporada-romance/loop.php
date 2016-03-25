<?php
/**
 *
 *  The template part for displaying posts from blog
 *
 *  @package WordPress
 *  @subpackage Materialize
 *  @since Materialize 1.0
 */

    global $posts_total, $posts_index;
    
    $mythemes_layout = new mythemes_layout( );

    // left sidebar ( if exists )
    $mythemes_layout -> sidebar( 'left' );
?>

<!-- content -->
<section class="<?php echo $mythemes_layout -> classes(); ?> mythemes-classic">
<?php
    
    if( have_posts() ){
        $posts_total = count( $wp_query -> posts );
        $posts_index = 0;
        while( have_posts() ){
            $posts_index++;
            the_post();

            /**
             *
             *  Include the classic post view
             *  If you want to override this in a child theme, then include a file
             *  called classic.php and that will be used instead.
             */

            get_template_part( 'templates/views/classic' );
        }
    }

    // if results not found
    else{
        echo '<div class="div-mensagem">';
        echo '<h3>' . __( 'Resultados não encontrados :(' , 'materialize' ) . '</h3>';
        echo '<p>' . __( 'Infelizmente esta pagina, post ou recurso não existe ou não foi encontrado :( Perhaps it is necessary to change the call method to this page, post or resource.' , 'materialize' ) . '</p>';
        echo '</div>';
    }

    // pagination template
    get_template_part( 'templates/pagination' );
?>
</section>

<?php
    // right sidebar ( if exists )
    $mythemes_layout -> sidebar( 'right' );
?>