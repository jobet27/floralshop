<?php
/**
 * Template Name: Boutique Page
 */
get_header(); ?>

    <main>
        <!-- Boutique Header -->
        <section class="section" style="background: var(--secondary); padding: 160px 0 100px; color: white; position: relative; overflow: hidden;">
            <!-- Decorative Element -->
            <div style="position: absolute; right: -100px; top: -50px; opacity: 0.1; font-size: 20rem; font-family: var(--font-display); pointer-events: none;">&</div>
            
            <div class="container reveal">
                <div style="max-width: 800px;">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Artisanal Collection</span>
                    <h1 class="display-large" style="margin-top: 20px; line-height: 0.9;">The <span class="text-italic">Boutique</span> <br>Gallery</h1>
                    <p style="margin-top: 30px; opacity: 0.8; font-size: 1.25rem; line-height: 1.8;">Our full collection of hand-crafted arrangements, curated to bring the beauty of nature into your home.</p>
                </div>
            </div>
        </section>

        <!-- Boutique Layout -->
        <section class="section">
            <div class="container">
                <div style="display: grid; grid-template-columns: 250px 1fr; gap: 60px;">
                    <!-- Sidebar Filters -->
                    <aside class="reveal">
                        <div style="position: sticky; top: 120px;">
                            <div style="margin-bottom: 40px;">
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--secondary); margin-bottom: 20px; border-bottom: 2px solid var(--primary); padding-bottom: 10px; display: inline-block;">Collections</h4>
                                <ul style="list-style: none; font-size: 0.9rem; line-height: 2.5;">
                                    <li><a href="#" style="color: var(--primary); font-weight: 700;">All Arrangements</a></li>
                                    <li><a href="#" style="opacity: 0.6;">Romantic & Soft</a></li>
                                    <li><a href="#" style="opacity: 0.6;">Bold & Seasonal</a></li>
                                    <li><a href="#" style="opacity: 0.6;">Rustic Charm</a></li>
                                    <li><a href="#" style="opacity: 0.6;">Wedding Specials</a></li>
                                </ul>
                            </div>
                            
                            <div style="margin-bottom: 40px;">
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--secondary); margin-bottom: 20px; border-bottom: 2px solid var(--primary); padding-bottom: 10px; display: inline-block;">Price Range</h4>
                                <ul style="list-style: none; font-size: 0.9rem; line-height: 2.5;">
                                    <li><a href="#" style="opacity: 0.6;">Under $50</a></li>
                                    <li><a href="#" style="opacity: 0.6;">$50 — $100</a></li>
                                    <li><a href="#" style="opacity: 0.6;">$100 — $200</a></li>
                                    <li><a href="#" style="opacity: 0.6;">Luxury $200+</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>

                    <!-- Product Grid -->
                    <div>
                        <div class="product-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 40px;">
                            <?php 
                            $flower_query = new WP_Query(array(
                                'post_type' => 'flower',
                                'posts_per_page' => -1,
                            ));

                            if ($flower_query->have_posts()):
                                while ($flower_query->have_posts()): $flower_query->the_post();
                                    $category = get_the_terms(get_the_ID(), 'flower_cat');
                                    $price = get_post_meta(get_the_ID(), 'flower_price', true) ?: '$0';
                            ?>
                            <div class="flower-card reveal">
                                <div class="card-img-wrapper">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                        <img src="https://images.unsplash.com/photo-1526047932273-341f2a7631f9?auto=format&fit=crop&w=800&q=80" alt="Placeholder">
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <span class="card-category"><?php echo $category ? $category[0]->name : 'Uncategorized'; ?></span>
                                    <h3 style="font-size: 1.5rem;"><?php the_title(); ?></h3>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-top: 10px;">
                                        <p class="text-gold" style="font-weight: 700; font-size: 1.25rem; margin-bottom: 0;"><?php echo $price; ?></p>
                                        <a href="<?php the_permalink(); ?>" style="color: white; font-size: 0.75rem; font-weight: 600; border-bottom: 1px solid rgba(255,255,255,0.4); padding-bottom: 2px; text-transform: uppercase; letter-spacing: 1px;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endwhile;
                                wp_reset_postdata();
                            else:
                                echo '<p>Our boutique is currently being curated. Please check back soon.</p>';
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
