<?php
// configuration
include('wp-config.php');
$rowperpage = 6;
$values = $_POST['row']; 
$catID = $_POST['pageid'];  
// selecting posts
$counter=0;
$posts = get_posts(array('author' => $catID,'hide_empty' => 0, 'offset'=>$values ,'numberposts'=> $rowperpage, 'post_status' => 'publish'));
foreach($posts as $post){
$counter++;
$post_id = $post->ID;
$title =  $post->post_title; 
$titleurl = get_permalink($post_id);
$catname = get_the_category( $post_id )[0]->name;
$catIDs = get_the_category( $post_id )[0]->term_id;
$catnameUrl = get_category_link($catIDs);
$eauthor_id = get_post_field ('post_author', $post_id);
$eAuthor_name = get_the_author_meta( 'display_name' , $eauthor_id ); 
$eAuthor_names = get_the_author_meta( 'user_nicename' , $eauthor_id );
$eautor_url = str_replace(' ', '-', $eAuthor_names);
$content = wp_trim_words(get_the_excerpt(), 15); 
$dates = get_the_date('F j, Y', $post_id);
$contentsimg =  apply_filters( 'the_content', get_the_content() );
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $contentsimg, $matches);
$output = preg_match_all('/<img.+alt=[\'"]([^\'"]+)[\'"].*>/i', $contentsimg, $matchess);
$first_img = $matches [1] [0];
$alttag = $matchess [1] [0];
// Creating HTML structure
$html .= '<section id="post_'.$post_id.'" class="post col-sm-6 postshorts">';
$html .= '<img src='.$first_img.' width="650" height="229" loading="lazy" alt='.$alttag.' class="postimage" />';
$html .= '<div class="small-details">';
$html .='<div class="title">';
$html .= '<h2 class="entry-title"><a href="'.$titleurl.'">'.$title.'</a></h2>';
$html .= ' <small>'.$dates.', <a href="'.$catnameUrl.'">'.$catname.'</a></small>';
$html .='</div>';
$html .= '<div class="entry">'.$content.' <a href="'.$titleurl.'">Read More</a></div>';
$html .= '</div>';
$html .= '</section>';
}
echo $html;
?>
