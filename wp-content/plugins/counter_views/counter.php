<?php
/*
Plugin Name: Views Counter
Description: Plugin to count views for posts, pages, and custom post types.
Version: 1.0
Author: Alfred KUATE.K
*/

// Fonction principale
function views_counter_init() {

    function increase_view_count($post_id) {
        $views = get_post_meta($post_id, 'views', true);
        $views = empty($views) ? 1 : $views + 1;
        update_post_meta($post_id, 'views', $views);
    }
    add_action('wp_head', 'increase_view_count');
    // recupere les post les plus vues
    function get_post_views($post_id) {
        return get_post_meta($post_id, 'views', true);
    }

    // Affichage des contenus les plus populaires
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'meta_key' => 'views',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>Nombre de vues : <?php echo get_post_meta(get_the_ID(), 'views', true); ?></p>
            </div>
            <?php
        }
        wp_reset_postdata(); 
    } else {
        echo 'Aucun contenu populaire trouvé.';
    }
// Upload de l'image
    $image_path = './image/2.jpeg'; 

    if (file_exists($image_path) && is_readable($image_path)) {
        $upload = media_handle_upload(array('file' => $image_path), 0);

        if (is_wp_error($upload)) {
            echo "Erreur lors du téléchargement de l'image : " . $upload->get_error_message();
        } else {
            $post_data = array(
                'post_title' => 'Titre ',
                'post_content' => 'Contenu',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_type' => 'post'
            );

            $post_id = wp_insert_post($post_data);

            if (is_wp_error($post_id)) {
                echo "Erreur lors de l'ajout de l'article : " . $post_id->get_error_message();
            } else {
                set_post_thumbnail($post_id, $upload);
                echo "Article importé avec succès ! ID de l'article : " . $post_id;
            }
        }
    } else {
        echo "L'image n'existe pas.";
    }

}
add_action('init', 'views_counter_init');
