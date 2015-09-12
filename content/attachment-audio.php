<?php if ( is_attachment() ) : // If viewing a single attachment. ?>

	<article <?php hybrid_attr( 'post' ); ?>>

		<?php hybrid_attachment(); // Function for handling non-image attachments. ?>

		<header class="entry-header">
			<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
			<?php edit_post_link(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- .entry -->

	<div class="attachment-meta">

		<div class="media-info">

			<h3><?php esc_html_e( 'Audio Info', 'korin' ); ?></h3>

			<ul class="media-meta">
				<?php $pre = '<li><span class="prep">%s</span>'; ?>
				<?php hybrid_media_meta( 'length_formatted', array( 'before' => sprintf( $pre, esc_html__( 'Run Time',  'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'artist',           array( 'before' => sprintf( $pre, esc_html__( 'Artist',    'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'composer',         array( 'before' => sprintf( $pre, esc_html__( 'Composer',  'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'album',            array( 'before' => sprintf( $pre, esc_html__( 'Album',     'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'track_number',     array( 'before' => sprintf( $pre, esc_html__( 'Track',     'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'year',             array( 'before' => sprintf( $pre, esc_html__( 'Year',      'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'genre',            array( 'before' => sprintf( $pre, esc_html__( 'Genre',     'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'file_type',        array( 'before' => sprintf( $pre, esc_html__( 'Type',      'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'file_name',        array( 'before' => sprintf( $pre, esc_html__( 'Name',      'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'file_size',        array( 'before' => sprintf( $pre, esc_html__( 'Size',      'korin' ) ), 'after' => '</li>' ) ); ?>
				<?php hybrid_media_meta( 'mime_type',        array( 'before' => sprintf( $pre, esc_html__( 'Mime Type', 'korin' ) ), 'after' => '</li>' ) ); ?>
			</ul>

		</div><!-- .media-info -->

	</div><!-- .attachment-meta -->

<?php else : // If not viewing a single attachment. ?>

	<article <?php hybrid_attr( 'post' ); ?>>

		<?php get_the_image( array( 'size' => 'full', 'order' => array( 'featured', 'attachment' ) ) ); ?>

		<header class="entry-header">
			<?php the_title( '<h2 ' . hybrid_get_attr( 'entry-title' ) . '><a href="' . get_permalink() . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div <?php hybrid_attr( 'entry-summary' ); ?>>
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

	</article><!-- .entry -->

<?php endif; // End single attachment check. ?>