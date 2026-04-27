<?php get_header(); ?>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero-content hero-animate">
                    <span class="hero-subtitle">Curated with love</span>
                    <h1 class="display-large">Breathtaking <br><span class="text-gold">Floral Artistry</span></h1>
                    <div class="hero-btns">
                        <a href="#boutique" class="btn btn-primary">Explore Collection</a>
                        <a href="#contact" class="btn btn-outline" style="margin-left: 2rem;">Book Consultation</a>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <span class="mouse"></span>
                <p>Scroll to explore</p>
            </div>
        </section>

        <!-- Signature Boutique Section -->
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
                        // Fallback static items if no posts exist yet
                        for($i=0; $i<6; $i++): ?>
                            <div class="flower-card reveal">
                                <div class="card-img-wrapper">
                                    <img src="https://images.unsplash.com/photo-1526047932273-341f2a7631f9?auto=format&fit=crop&w=800&q=80" alt="Placeholder">
                                </div>
                                <div class="card-body">
                                    <span class="card-category">Sample</span>
                                    <h3>Floral Creation</h3>
                                    <p class="text-gold">$85</p>
                                </div>
                            </div>
                        <?php endfor;
                    endif; ?>
                </div>
            </div>
        </section>

        <!-- Occasions Section -->
        <section class="section" id="occasions" style="background: #f4eee8;">
            <div class="container">
                <div class="contact-grid">
                    <div class="reveal">
                        <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Every Moment Matters</span>
                        <h2 style="font-size: 3.5rem;">For Life's Most <span class="text-italic">Beautiful</span> Chapters</h2>
                        <p style="margin: 30px 0; font-size: 1.1rem; line-height: 1.8;">From the "I do" to the "just because," we specialize in creating floral narratives that speak louder than words.</p>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px;">
                            <div class="occasion-item">
                                <h4 style="color: var(--secondary); margin-bottom: 10px;">Weddings</h4>
                                <p style="font-size: 0.9rem; opacity: 0.8;">Bespoke bridal bouquets and venue styling for your special day.</p>
                            </div>
                            <div class="occasion-item">
                                <h4 style="color: var(--secondary); margin-bottom: 10px;">Events</h4>
                                <p style="font-size: 0.9rem; opacity: 0.8;">Transforming spaces with corporate and private floral installations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="reveal" style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80" alt="Wedding Florals" style="border-radius: 0; box-shadow: var(--shadow-luxury);">
                        <div style="position: absolute; bottom: -30px; left: -30px; background: var(--secondary); color: white; padding: 40px; width: 250px;">
                            <span style="font-family: var(--font-display); font-size: 3rem; display: block; margin-bottom: 10px;">10+</span>
                            <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px;">Years of floral excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="section" id="story">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto; text-align: center;" class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Our Story</span>
                    <h2 style="font-size: 3.5rem; margin-top: 20px;">Artisans of <span class="text-italic">Nature</span></h2>
                    <p style="font-size: 1.25rem; line-height: 2; margin: 40px 0; color: var(--text-muted);">Founded on the belief that flowers are the earth's most eloquent language, FloralShop has been hand-crafting unique botanical experiences for over a decade. Every stem is chosen for its character, every petal for its perfection.</p>
                    <a href="#" class="btn btn-outline" style="color: var(--secondary); border-color: var(--secondary);">Learn More About Us</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
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
