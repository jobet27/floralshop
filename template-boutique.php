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
                            $boutique_products = [
                                ['name' => 'Ethereal Blush', 'cat' => 'Romantic', 'price' => '$85', 'img' => 'https://images.unsplash.com/photo-1526047932273-341f2a7631f9'],
                                ['name' => 'Forest Whisper', 'cat' => 'Rustic', 'price' => '$75', 'img' => 'https://images.unsplash.com/photo-1490750967868-88aa4486c946'],
                                ['name' => 'Golden Hour', 'cat' => 'Summer', 'price' => '$95', 'img' => 'https://images.unsplash.com/photo-1508784411316-02b8cd4d3a3a'],
                                ['name' => 'Velvet Crimson', 'cat' => 'Classic', 'price' => '$110', 'img' => 'https://images.unsplash.com/photo-1519378304606-27b95d85760d'],
                                ['name' => 'Midnight Lily', 'cat' => 'Elegant', 'price' => '$125', 'img' => 'https://images.unsplash.com/photo-1533276395701-d2b635a24929'],
                                ['name' => 'Spring Awakening', 'cat' => 'Seasonal', 'price' => '$65', 'img' => 'https://images.unsplash.com/photo-1525310212502-b4a72477c72c'],
                                ['name' => 'Ivory Dream', 'cat' => 'Wedding', 'price' => '$150', 'img' => 'https://images.unsplash.com/photo-1548849170-e662c057aab7'],
                                ['name' => 'Sunset Peony', 'cat' => 'Seasonal', 'price' => '$90', 'img' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399'],
                                ['name' => 'Wild Meadow', 'cat' => 'Rustic', 'price' => '$60', 'img' => 'https://images.unsplash.com/photo-1496062031456-07b8f162a322'],
                                ['name' => 'Orchid Elegance', 'cat' => 'Classic', 'price' => '$180', 'img' => 'https://images.unsplash.com/photo-1512428813834-c702c7702b78'],
                                ['name' => 'Morning Dew', 'cat' => 'Romantic', 'price' => '$70', 'img' => 'https://images.unsplash.com/photo-1507290439931-a861b5a38200'],
                                ['name' => 'Autumn Gold', 'cat' => 'Seasonal', 'price' => '$85', 'img' => 'https://images.unsplash.com/photo-1502977249166-824b3a8a4d6d'],
                            ];
                            foreach($boutique_products as $product): ?>
                            <div class="flower-card reveal">
                                <div class="card-img-wrapper">
                                    <img src="<?php echo $product['img']; ?>?auto=format&fit=crop&w=800&q=80" alt="<?php echo $product['name']; ?>">
                                </div>
                                <div class="card-body">
                                    <span class="card-category"><?php echo $product['cat']; ?></span>
                                    <h3 style="font-size: 1.5rem;"><?php echo $product['name']; ?></h3>
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-top: 10px;">
                                        <p class="text-gold" style="font-weight: 700; font-size: 1.25rem; margin-bottom: 0;"><?php echo $product['price']; ?></p>
                                        <a href="#" style="color: white; font-size: 0.75rem; font-weight: 600; border-bottom: 1px solid rgba(255,255,255,0.4); padding-bottom: 2px; text-transform: uppercase; letter-spacing: 1px;">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
