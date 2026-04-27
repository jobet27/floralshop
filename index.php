<?php get_header(); ?>

    <main>
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero-content hero-animate">
                    <span class="hero-subtitle">Curated with love</span>
                    <h1 class="display-large">Breathtaking <br><span class="text-gold">Floral Artistry</span></h1>
                    <div class="hero-btns">
                        <a href="#" class="btn btn-primary">Explore Collection</a>
                        <a href="#" class="btn btn-outline" style="margin-left: 2rem;">Book Consultation</a>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <span class="mouse"></span>
                <p>Scroll to explore</p>
            </div>
        </section>

        <section class="section" id="boutique">
            <div class="container">
                <div class="section-header text-center reveal" style="margin-bottom: 60px;">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Seasonal Picks</span>
                    <h2 style="font-size: 3rem;">Our Signature Creations</h2>
                </div>

                <div class="product-grid">
                    <?php 
                    $flower_query = new WP_Query(array(
                        'post_type' => 'flower',
                        'posts_per_page' => 6,
                    ));

                    if ($flower_query->have_posts()):
                        while ($flower_query->have_posts()): $flower_query->the_post();
                            $category = get_the_terms(get_the_ID(), 'flower_cat');
                            $price = get_post_meta(get_the_ID(), '_flower_price', true) ?: '$' . rand(50, 150);
                    ?>
                    <div class="flower-card reveal">
                        <div class="card-img-wrapper">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else: ?>
                                <img src="https://images.unsplash.com/photo-1519378304606-27b95d85760d?auto=format&fit=crop&w=800&q=80" alt="Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <span class="card-category"><?php echo $category ? $category[0]->name : 'Seasonal'; ?></span>
                            <h3><?php the_title(); ?></h3>
                            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-top: 10px;">
                                <p class="text-gold" style="font-weight: 700; font-size: 1.5rem; margin-bottom: 0;"><?php echo $price; ?></p>
                                <a href="<?php the_permalink(); ?>" style="color: white; font-size: 0.8rem; font-weight: 600; border-bottom: 1px solid rgba(255,255,255,0.4); padding-bottom: 2px; text-transform: uppercase; letter-spacing: 1px;">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p style="grid-column: 1/-1; text-align: center; opacity: 0.5;">Our boutique is currently being curated. Please check back soon.</p>';
                    endif; ?>
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info reveal">
                        <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Get in Touch</span>
                        <h2>Let's Create <br>Something <span class="text-italic">Beautiful</span></h2>
                        <p style="margin: 30px 0; font-size: 1.1rem; max-width: 500px;">Whether it's a wedding, a special event, or just because—our floral artists are here to bring your vision to life.</p>
                        <div class="contact-details">
                            <p><strong>Address:</strong> 123 Bloom Street, Floral City</p>
                            <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                            <p><strong>Email:</strong> hello@floralshop.com</p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form action="#">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea id="message" rows="5" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary no-magnetic" style="width: 100%;">Send Inquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
