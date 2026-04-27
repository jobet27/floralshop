<?php
/**
 * Template Name: Portfolio Gallery
 */
get_header(); ?>

    <main>
        <!-- Portfolio Hero -->
        <section class="section" style="height: 50vh; min-height: 350px; display: flex; align-items: center; position: relative; background: var(--secondary); overflow: hidden;">
            <div class="container" style="position: relative; z-index: 2; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">The Archive</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 0;">Floral <span class="text-italic">Gallery</span></h1>
                </div>
            </div>
        </section>

        <!-- Main Content with Sidebar -->
        <section class="section" style="background: var(--background);">
            <div class="container">
                <div style="display: grid; grid-template-columns: 300px 1fr; gap: 80px; align-items: start;">
                    
                    <!-- Dynamic Sidebar -->
                    <?php include( locate_template( 'sidebar-navigation.php' ) ); ?>

                    <!-- Page Content -->
                    <div class="content-area">
                        <div class="reveal">
                            <div class="product-grid" style="grid-template-columns: repeat(2, 1fr); gap: 30px;">
                                <?php 
                                $portfolio_query = new WP_Query(array(
                                    'post_type' => 'flower',
                                    'posts_per_page' => 12,
                                ));

                                if ($portfolio_query->have_posts()):
                                    while ($portfolio_query->have_posts()): $portfolio_query->the_post();
                                        $category = get_the_terms(get_the_ID(), 'flower_cat');
                                ?>
                                    <div class="flower-card reveal" style="height: 500px;">
                                        <div class="card-img-wrapper">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('large'); ?>
                                            <?php else: ?>
                                                <img src="https://images.unsplash.com/photo-1519378304606-27b95d85760d?auto=format&fit=crop&w=800&q=80" alt="Gallery Item">
                                            <?php endif; ?>
                                        </div>
                                        <div class="card-body">
                                            <span class="card-category"><?php echo $category ? $category[0]->name : 'Portfolio Piece'; ?></span>
                                            <h3 style="font-size: 2rem;"><?php the_title(); ?></h3>
                                            <a href="<?php the_permalink(); ?>" style="color: var(--primary-light); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; border-bottom: 1px solid var(--primary-light); padding-bottom: 5px;">Explore Project</a>
                                        </div>
                                    </div>
                                <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                    echo '<p style="grid-column: 1/-1; text-align: center; opacity: 0.5;">Our portfolio is currently being archived. Please check back for our latest collections.</p>';
                                endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
