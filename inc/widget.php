<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function walpost_widget_register(){

	// Footer Widget
	register_sidebar( array(
        'name' => esc_html__('Footer', 'walpost'),
        'id'   => 'footer',
		'description'    => esc_html__( 'Add widgets here.', 'walpost' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h6 class="footer_widget_title text-white">',
		'after_title'    => "</h6>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'walpost'),
        'id'   => 'sidebar_1',
		'description'    => esc_html__( 'Add widgets here.', 'walpost' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget section-title rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h5 class="mb-3">',
		'after_title'    => "</h5>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

}
add_action( 'widgets_init', 'walpost_widget_register' );


// Custom Author Widget 
class Author_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'Author_Widget', // Base ID
			'Author Widget', // Name
		);
		add_action('widgets_init', function(){
			register_widget('Author_Widget' );
		});
	}
	public function widget($args, $instance ){
		?>
		<div class="widget">
			<?php
			global $post;
			$author_id = $post->post_author;
			?>
			<div class="widget-author">
				<div class="author-img">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="image">
						<img src="<?php echo get_avatar_url('ID'); ?>" alt="">
					</a>
				</div>
				<div class="author-content">
					<h6 class="name"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h6>
					<p class="bio">
					<?php echo get_the_author_meta( 'description', $author_id ); ?>
					</p>
				</div>
			</div>
		</div>
		
		<?php
	}

	public function form( $instance ) {
		$title = $instance['title'];

		?>
		<p>
		<label" for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

}

$Author_Widget = new Author_Widget();



// Custom Widget ( Latest Post)
class Latest_Post_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'Latest_Post_Widget', // Base ID
			'Latest Post Widget', // Name
		);
		add_action('widgets_init', function(){
			register_widget('Latest_Post_Widget' );
		});
	}
	public function widget($args, $instance ){

		?>
		<div class="widget">
		<ul class="widget-latest-posts">
			<?php
			echo '<h5 class="section-title">'. $instance['title'] .'</h5>';
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 4,
			) ;
			$query = new WP_Query($args);
			while ($query -> have_posts()){
				$query -> the_post();
			?>
			<li class="post-item">
				<div class="image">
					<a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
				</div>
				
				<div class="content">
					<p class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<small class="post-date"><i class="fas fa-clock"></i><?php echo get_the_date(); ?></small>
				</div>
			</li>
			<?php
			}
			wp_reset_postdata();
			?>
			</ul>
		</div>

 		<?php
	}

	public function form( $instance ) {
		$title = $instance['title'];

		?>
		<p>
		<label" for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

}

$Latest_Post_Widget = new Latest_Post_Widget();