<?php
if( empty( $_GET['ids'] ) ) {
  echo '<p class="nomatches">';
    esc_html_e('No IDs to compare', 'contempo');
  echo '</p>';
  return;
}

$alike_settings = get_option('alike_settings', true);

$max_compare = ( isset( $alike_settings['max_compare'] ) ) ? $alike_settings['max_compare'] : '4';
$ids = explode(',', $_GET['ids']);
if( count( $ids ) <= $max_compare ) :

$post_types = array();
foreach ($ids as $id) {
  $post_types[] = get_post_type( $id );
}

$isHomogenous = alike_is_homogenous( $post_types );
if( !$isHomogenous ) {
  esc_html_e("Please select same post type to compare.", "alike");

  return;
}
$post_type = current( $post_types );

$alike_data = get_option('alike_data');
$results    = array();

if( !empty( $alike_data ) ) {
  foreach($alike_data as $key => $value) {
    if ( isset( $value['selectedData'] ) && $value['post_type'] == $post_type) {
      $results[] = $value['selectedData'];
    }
  }
}



$all_data = array();
$all_data['on_bottom'] = array();
$all_data['on_top'] = array();
foreach ($results as $result) {

  foreach ($result as $res) {

    switch ($res['type']) {
      case 'taxonomy':

        foreach ($ids as $id) {
          $post_terms = get_the_terms($id, $res['key']);

          if( !empty( $post_terms ) ) {
            $terms = array();
            foreach ($post_terms as $term) {
              $terms[] = $term->name;
            }

            if( isset( $res['onTop'] ) && $res['onTop'] == 'true' ) {

              // Push data to on_top array
              $all_data['on_top'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => implode(', ', $terms),
              );

            } else {

              // Push data to on_bottom array
              $all_data['on_bottom'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => implode(', ', $terms),
              );
            }

          } else {
            if( isset( $res['onTop'] ) && $res['onTop'] == 'true' ) {

              // Push data to on_top array
              $all_data['on_top'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '-',
              );

            } else {
              // Push data to on_bottom array
              $all_data['on_bottom'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '-',
              );
            }

          }

        }

        break;

      case 'meta':

        foreach ($ids as $id) {
          $post_meta = get_post_meta($id, $res['key'], true );

          if( !empty( $post_meta ) ) {
            if( isset( $res['onTop'] ) && $res['onTop'] == 'true' ) {
              if( isset( $res['showRating'] ) && $res['showRating'] == 'true' ) {

                // Generate rating html data
                if( gettype( $post_meta ) == 'string' ) {
                  $rating_value = $post_meta*20 .'%';
                  $data_html = '<div class="alike-star-rating" title="Rated '.$post_meta.' out of 5"><span style="width:'.$rating_value.'"></span></div>';
                } else {
                  $data_html = esc_html__('Array or Object are not allowed here', 'alike');
                }

                // Push data to on_top array
                $all_data['on_top'][] = array(
                  'id' => $id,
                  'title' => $res['title'],
                  'data' => $data_html,
                );

              } else {

                // Push data to on_top array
                $all_data['on_top'][] = array(
                  'id' => $id,
                  'title' => $res['title'],
                  'data' => ( gettype( $post_meta ) == 'string' ) ? $post_meta : 'Sorry! not allowed.',
                );
              }


            } else {
              if( isset( $res['showRating'] ) && $res['showRating'] == 'true' ) {

                // Generate rating html data
                if( gettype( $post_meta ) == 'string' ) {
                  $rating_value = $post_meta*20 .'%';
                  $data_html = '<div class="alike-star-rating" title="Rated '.$post_meta.' out of 5"><span style="width:'.$rating_value.'"></span></div>';
                } else {
                  $data_html = esc_html__('Array or Object are not allowed here', 'alike');
                }

                // Push data to on_bottom array
                $all_data['on_bottom'][] = array(
                  'id' => $id,
                  'title' => $res['title'],
                  'data' => $data_html,
                );

              } else {

                // Push data to on_bottom array
                $all_data['on_bottom'][] = array(
                  'id' => $id,
                  'title' => $res['title'],
                  'data' => ( gettype( $post_meta ) == 'string' ) ? $post_meta : esc_html__('Sorry! not allowed.', 'alike'),
                );
              }
            }

          } else {
            if( isset( $res['onTop'] ) && $res['onTop'] == 'true' ) {

              // Push data to on_top array
              $all_data['on_top'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '-',
              );

            } else {

              // Push data to on_bottom array
              $all_data['on_bottom'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '-',
              );
            }


          }

        }

        break;

      case 'term':

        foreach ($ids as $id) {

          $post_terms = get_the_terms($id, $res['taxonomy']);

          if( !empty( $post_terms ) ) {
            $terms = array();
            foreach ($post_terms as $term) {
              $terms[] = $term->slug;
            }

            if( in_array($res['key'], $terms ) ) {

              // Push data to on_bottom array
              $all_data['on_bottom'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '<span class="available"><i class="ion-checkmark-round"></i></span>',
              );

            } else {

              // Push data to on_bottom array
              $all_data['on_bottom'][] = array(
                'id' => $id,
                'title' => $res['title'],
                'data' => '<span class="not-available"><i class="ion-close-round"></i></span>',
              );
            }
          } else {

            // Push data to on_bottom array
            $all_data['on_bottom'][] = array(
              'id' => $id,
              'title' => $res['title'],
              'data' => '<span class="not-available"><i class="fa fa-times"></i></span>',
            );
          }
        }
        break;
    }
  }
}

$combined_top = array();
foreach ($all_data['on_top'] as $key => $value) {
  $combined_top[$value['id']][$key] = $value['data'];
}

$combined_bottom = array();
foreach ($all_data['on_bottom'] as $key => $value) {
  $combined_bottom[$value['title']][$key] = $value['data'];
}

$theme_style = 'style-' . $alike_settings['alike_theme_select'];
$theme_content = 'alike-content-' . $alike_settings['alike_theme_select'];

?>
<div class="alike-content alike-compare-table <?php echo $theme_content ?>">
    <table class="alike-table <?php echo $theme_style ?>">
        <thead>
            <tr>
                <th></th>
                <?php foreach ($ids as $id) : ?>
                <th>
                    <div class="alike-table-thumb">
                        <a href="<?php echo esc_url( get_the_permalink( $id ) ); ?>">
                            <?php echo get_the_post_thumbnail( $id, 'alike_thumbnail' ); ?>
                        </a>
                    </div>
                    <!-- end .alike-table-thumb -->
                    <div class="alike-table-top-bar">
                        <h2>
                          <a href="<?php echo esc_url( get_the_permalink( $id ) ); ?>"><?php echo apply_filters('the_title', get_the_title( $id ), $id ); ?></a>
                        </h2>
                        <?php if( !empty( $combined_top ) ) : ?>
                          <?php foreach ($combined_top[$id] as $value) : ?>
                            <h4><?php echo $value ?></h4>
                          <?php endforeach; ?>
                        <?php endif ?>
                    </div><!-- end .alike-table-top-bar -->
                </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
          <?php foreach ( $combined_bottom as $key => $value ) : ?>
            <tr>
                <td class="alike-table-title"><?php echo esc_attr( $key ) ?></td>
              <?php foreach ($value as $val) : ?>
                <td class="alike-table-value"><?php echo $val ?></td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div><!-- end .alike-content -->
<?php else : // end count ids if ?>

<?php echo sprintf( esc_html__('You can compare maximum between %s items.', 'alike'), $max_compare) ?>

<?php endif; ?>