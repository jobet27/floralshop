<?php
/**
 * Template Name: Workshops & Classes
 */
get_header(); ?>

    <main>
        <!-- Workshops Hero -->
        <section class="section" style="height: 60vh; min-height: 400px; display: flex; align-items: center; position: relative; background: var(--secondary) url('https://images.unsplash.com/photo-1516934024742-b461fba47600?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(26,60,52,0.8), rgba(26,60,52,0.4)); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Master the Craft</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 20px;">Floral <span class="text-italic">Artistry</span></h1>
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
                            <h2 style="font-size: 3.5rem; color: var(--secondary); line-height: 1.1; margin-bottom: 60px;">Seasonal <span class="text-italic">Workshops</span></h2>
                            
                            <div style="display: grid; gap: 40px;">
                                <?php 
                                $workshop_query = new WP_Query(array(
                                    'post_type' => 'workshop',
                                    'posts_per_page' => 10,
                                ));

                                if ($workshop_query->have_posts()):
                                    while ($workshop_query->have_posts()): $workshop_query->the_post();
                                        $date = get_post_meta(get_the_ID(), '_workshop_date', true) ?: 'TBA';
                                        $price = get_post_meta(get_the_ID(), '_workshop_price', true) ?: '$125';
                                ?>
                                <div style="display: flex; background: white; box-shadow: var(--shadow-md); overflow: hidden;">
                                    <div style="flex: 1; min-width: 300px;">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                        <?php else: ?>
                                            <img src="https://images.unsplash.com/photo-1516934024742-b461fba47600?auto=format&fit=crop&w=600&q=80" alt="Workshop">
                                        <?php endif; ?>
                                    </div>
                                    <div style="flex: 1.2; padding: 40px;">
                                        <span class="text-gold" style="font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px;"><?php echo esc_html($date); ?></span>
                                        <h3 style="color: var(--secondary); margin: 15px 0; font-size: 1.8rem;"><?php the_title(); ?></h3>
                                        <div style="opacity: 0.7; font-size: 0.95rem; margin-bottom: 25px; line-height: 1.8;"><?php the_excerpt(); ?></div>
                                        <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 20px;">
                                            <span style="font-weight: 700; font-size: 1.5rem; color: var(--secondary);"><?php echo esc_html($price); ?></span>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="padding: 10px 25px; font-size: 0.7rem;">Book Seat</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                    echo '<p style="text-align: center; opacity: 0.5;">New workshops are coming soon. Join our newsletter to stay updated.</p>';
                                endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
