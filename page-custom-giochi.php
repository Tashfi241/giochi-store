<?php
/* Template Name: Custom Giochi Store */
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIOCHI. — Ultra-Sleek Digital Gaming Storefront</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        lux: {
                            bg: '#08080a',
                            surface: '#111116',
                            card: '#16161d',
                            border: 'rgba(255, 255, 255, 0.08)',
                            violet: '#8b5cf6',
                            accent: '#6366f1'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            background-color: #08080a;
            color: #d1d5db;
            font-family: 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -0.01em;
            overflow-x: hidden;
        }
        .glass-panel {
            background: rgba(17, 17, 22, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .glass-card {
            background: rgba(22, 22, 29, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.07);
        }
        .hover-lift {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            border-color: rgba(139, 92, 246, 0.3);
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(139, 92, 246, 0.1);
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #08080a; }
        ::-webkit-scrollbar-thumb { background: #27272a; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #3f3f46; }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between selection:bg-white selection:text-black">

    <!-- HEADER -->
    <header class="sticky top-0 z-40 glass-panel border-b border-lux-border">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between gap-6">
            <a href="#" onclick="filterCategory('All Games')" class="flex items-center gap-2 group">
                <span class="font-bold text-xl sm:text-2xl text-white tracking-tight">
                    GIOCHI<span class="text-lux-violet font-semibold">.</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-8 font-medium text-xs tracking-widest uppercase text-zinc-400">
                <a href="#catalog" onclick="filterCategory('All Games')" class="hover:text-white transition-colors">Store</a>
                <a href="#hero" class="hover:text-white transition-colors">Featured</a>
                <a href="#catalog" class="hover:text-white transition-colors">Categories</a>
            </nav>

            <div class="flex items-center gap-4">
                <div class="relative w-40 sm:w-64">
                    <input type="text" id="searchInput" oninput="handleSearch()" placeholder="Search catalog..." 
                        class="w-full bg-lux-surface/90 text-xs text-zinc-200 placeholder-zinc-500 rounded-full pl-9 pr-8 py-2 border border-lux-border focus:border-lux-violet focus:outline-none transition-all">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-2.5 text-zinc-500 text-xs"></i>
                    <button id="clearSearchBtn" onclick="clearSearch()" class="hidden absolute right-3 top-2 text-zinc-500 hover:text-white">
                        <i class="fa-solid fa-xmark text-xs"></i>
                    </button>
                </div>

                <button onclick="toggleCartDrawer()" class="relative p-2.5 rounded-full bg-lux-surface border border-lux-border hover:border-zinc-500 text-zinc-300 hover:text-white transition-all">
                    <i class="fa-solid fa-bag-shopping text-sm"></i>
                    <span id="cartBadge" class="absolute -top-1 -right-1 bg-white text-black font-bold text-[10px] w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </button>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-6 sm:px-8 py-10 space-y-16">
        <section id="hero" class="relative rounded-3xl overflow-hidden glass-card border border-lux-border p-8 sm:p-14 lg:p-16">
            <div class="absolute inset-0 z-0 opacity-25">
                <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1600&auto=format&fit=crop" alt="Hero Background" class="w-full h-full object-cover object-center filter contrast-125 grayscale">
                <div class="absolute inset-0 bg-gradient-to-r from-lux-bg via-lux-surface/90 to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-2xl space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs font-medium tracking-widest text-zinc-400 uppercase">
                    <span class="w-1.5 h-1.5 rounded-full bg-lux-violet"></span> Direct Digital Vault
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold text-white leading-tight tracking-tight">
                    NEXT-GEN DIGITAL <span class="bg-gradient-to-r from-white via-zinc-200 to-zinc-500 bg-clip-text text-transparent">DISCOVERY</span>
                </h1>

                <p class="text-zinc-400 text-sm sm:text-base leading-relaxed font-normal">
                    Curated selection of premium PC & next-generation console titles. Authenticated keys delivered instantaneously with uncompromised precision.
                </p>

                <div class="pt-4 flex items-center gap-4">
                    <a href="#catalog" class="px-7 py-3 rounded-full bg-white text-black font-semibold text-xs tracking-wider uppercase hover:bg-zinc-200 transition-all shadow-lg">
                        Explore Catalog
                    </a>
                    <button onclick="openQuickView(1)" class="px-7 py-3 rounded-full bg-lux-surface border border-lux-border hover:border-zinc-500 text-white font-semibold text-xs tracking-wider uppercase transition-all">
                        Featured Key
                    </button>
                </div>
            </div>
        </section>

        <section id="catalog" class="space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-lux-border pb-6">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-white tracking-tight">CURATED STOREFRONT</h2>
                    <p class="text-xs text-zinc-400 mt-1">Select from hand-picked AAA & indie masterpieces</p>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-xs text-zinc-500 uppercase tracking-widest font-medium">Sort:</span>
                    <select id="sortSelect" onchange="handleSort()" class="bg-lux-surface text-xs text-zinc-300 border border-lux-border rounded-full px-4 py-2 focus:outline-none focus:border-lux-violet transition-colors">
                        <option value="featured">Featured First</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Top Rated</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-wrap gap-2" id="categoryFilters"></div>
            <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"></div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-lux-surface border-t border-lux-border mt-20">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 py-12 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-2">
                <span class="font-bold text-lg text-white">GIOCHI<span class="text-lux-violet">.</span></span>
                <span class="text-xs text-zinc-500 border-l border-lux-border pl-3">Luxury Gaming Experience</span>
            </div>
            <p class="text-xs text-zinc-500 font-normal">© 2026 GIOCHI Vault Inc. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- QUICK VIEW MODAL -->
    <div id="quickViewModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-md">
        <div class="relative w-full max-w-3xl glass-panel bg-lux-surface border border-lux-border rounded-3xl overflow-hidden shadow-2xl max-h-[90vh] overflow-y-auto">
            <button onclick="closeQuickView()" class="absolute top-5 right-5 z-20 w-8 h-8 rounded-full bg-black/50 border border-lux-border text-zinc-400 hover:text-white transition-all flex items-center justify-center">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
            <div id="quickViewContent" class="p-8"></div>
        </div>
    </div>

    <!-- CART SLIDE-OVER DRAWER -->
    <div id="cartDrawer" class="fixed inset-0 z-50 pointer-events-none">
        <div id="cartBackdrop" onclick="toggleCartDrawer()" class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300 pointer-events-none"></div>
        <div id="cartPanel" class="absolute right-0 top-0 bottom-0 w-full max-w-md bg-lux-surface border-l border-lux-border transform translate-x-full transition-transform duration-300 pointer-events-auto flex flex-col justify-between">
            <div class="p-6 border-b border-lux-border flex items-center justify-between">
                <h3 class="font-bold text-base text-white uppercase tracking-wider">YOUR BAG</h3>
                <button onclick="toggleCartDrawer()" class="text-zinc-400 hover:text-white">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div id="cartItemsList" class="flex-grow p-6 overflow-y-auto space-y-4"></div>
            <div class="p-6 border-t border-lux-border space-y-4 bg-lux-bg/50">
                <div class="flex justify-between items-center text-sm font-medium">
                    <span class="text-zinc-400">Total Amount</span>
                    <span id="cartTotal" class="text-white text-lg font-bold">€0.00</span>
                </div>
                <button onclick="openCheckoutModal()" class="w-full py-3.5 rounded-full bg-white text-black font-semibold text-xs tracking-wider uppercase hover:bg-zinc-200 transition-all">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- CHECKOUT MODAL -->
    <div id="checkoutModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-md">
        <div class="relative w-full max-w-md glass-panel bg-lux-surface border border-lux-border rounded-3xl p-8 space-y-6">
            <h3 class="text-lg font-bold text-white tracking-tight">Order Confirmation</h3>
            <p class="text-xs text-zinc-400">Digital activation key(s) will be generated instantly for your account.</p>
            <div id="checkoutSummary" class="text-xs space-y-2 border-y border-lux-border py-4 text-zinc-300"></div>
            <button onclick="completeOrder()" class="w-full py-3 rounded-full bg-lux-violet text-white font-semibold text-xs tracking-wider uppercase hover:opacity-90 transition-all">
                Confirm & Receive Keys
            </button>
            <button onclick="closeCheckoutModal()" class="w-full text-center text-xs text-zinc-500 hover:text-zinc-300">
                Cancel
            </button>
        </div>
    </div>

    <!-- NOTIFICATION TOAST -->
    <div id="toast" class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none">
        <div class="glass-panel px-5 py-3 rounded-full border border-lux-border text-white text-xs flex items-center gap-3 shadow-2xl">
            <span class="w-2 h-2 rounded-full bg-lux-violet"></span>
            <span id="toastMsg" class="font-medium">Item added to bag</span>
        </div>
    </div>

    <!-- SCRIPT LOGIC -->
    <script>
        const gamesData = [
            {
                id: 1,
                title: "Cyberpunk 2077: Phantom Liberty",
                category: "Cyberpunk",
                price: 39.99,
                originalPrice: 59.99,
                rating: 4.9,
                platforms: ["PC", "PS5", "Xbox"],
                genre: "Action RPG / Sci-Fi",
                fileSize: "70 GB",
                releaseYear: "2023",
                image: "https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=800&auto=format&fit=crop",
                badge: "Featured",
                description: "Spy-thriller expansion for Cyberpunk 2077. Return as cyber-enhanced mercenary V on a dangerous mission in Dogtown."
            },
            {
                id: 2,
                title: "Elden Ring: Shadow of the Erdtree",
                category: "Action & RPG",
                price: 49.99,
                originalPrice: 69.99,
                rating: 5.0,
                platforms: ["PC", "PS5", "Xbox"],
                genre: "Action RPG / Fantasy",
                fileSize: "60 GB",
                releaseYear: "2024",
                image: "https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=800&auto=format&fit=crop",
                badge: "Masterpiece",
                description: "Explore the Land of Shadow, conquer new fearsome bosses, and discover powerful weapons in this monumental expansion."
            },
            {
                id: 3,
                title: "Starfield",
                category: "Cyberpunk",
                price: 34.99,
                originalPrice: 69.99,
                rating: 4.6,
                platforms: ["PC", "Xbox"],
                genre: "Space RPG",
                fileSize: "125 GB",
                releaseYear: "2023",
                image: "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop",
                badge: "50% Off",
                description: "Set among the stars. Create any character you want and explore with unparalleled freedom in Bethesda's epic space adventure."
            },
            {
                id: 4,
                title: "Ghost of Tsushima Director's Cut",
                category: "Action & RPG",
                price: 44.99,
                originalPrice: 59.99,
                rating: 4.9,
                platforms: ["PC", "PS5"],
                genre: "Open World / Samurai",
                fileSize: "75 GB",
                releaseYear: "2024",
                image: "https://images.unsplash.com/photo-1579783902614-a3fb3927b675?q=80&w=800&auto=format&fit=crop",
                badge: "Essential",
                description: "Forge a new path and wage an unconventional war for the freedom of Tsushima in Jin Sakai's epic journey."
            },
            {
                id: 5,
                title: "Horizon Forbidden West",
                category: "Action & RPG",
                price: 39.99,
                originalPrice: 59.99,
                rating: 4.8,
                platforms: ["PC", "PS5"],
                genre: "Sci-Fi / Adventure",
                fileSize: "120 GB",
                releaseYear: "2024",
                image: "https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=800&auto=format&fit=crop",
                badge: "Top Rated",
                description: "Brave a majestic but dangerous frontier that conceals mysterious new threats as Aloy explores distant lands."
            },
            {
                id: 6,
                title: "Death Stranding 2: On The Beach",
                category: "Pre-Orders",
                price: 69.99,
                originalPrice: 79.99,
                rating: 4.9,
                platforms: ["PS5"],
                genre: "Cinematic Sci-Fi",
                fileSize: "85 GB",
                releaseYear: "2025",
                image: "https://images.unsplash.com/photo-1538481199705-c710c4e965fc?q=80&w=800&auto=format&fit=crop",
                badge: "Pre-Order",
                description: "Embark on an inspiring mission of human connection beyond the UCA in Hideo Kojima's anticipated sequel."
            },
            {
                id: 7,
                title: "Armored Core VI: Fires of Rubicon",
                category: "Action & RPG",
                price: 39.99,
                originalPrice: 59.99,
                rating: 4.8,
                platforms: ["PC", "PS5", "Xbox"],
                genre: "Mecha / Action",
                fileSize: "60 GB",
                releaseYear: "2023",
                image: "https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=800&auto=format&fit=crop",
                badge: "Award Winner",
                description: "Assemble and pilot your custom mech in fast-paced 3D omnidirectional combat against formidable bosses."
            },
            {
                id: 8,
                title: "Hades II",
                category: "Indie",
                price: 28.99,
                originalPrice: 29.99,
                rating: 4.9,
                platforms: ["PC"],
                genre: "Rogue-like / Myth",
                fileSize: "10 GB",
                releaseYear: "2024",
                image: "https://images.unsplash.com/photo-1563089145-599997674d42?q=80&w=800&auto=format&fit=crop",
                badge: "Indie Gem",
                description: "Battle beyond the Underworld using dark sorcery to take on the Titan of Time in this mythic rogue-like dungeon crawler."
            }
        ];

        const categories = ["All Games", "Action & RPG", "Strategy", "Cyberpunk", "Indie", "Pre-Orders"];
        let currentCategory = "All Games";
        let cart = [];

        window.onload = function() {
            renderCategories();
            renderProducts(gamesData);
        };

        function renderCategories() {
            const container = document.getElementById('categoryFilters');
            container.innerHTML = categories.map(cat => `
                <button onclick="filterCategory('${cat}')" class="px-4 py-1.5 rounded-full text-xs font-medium tracking-wider transition-all ${currentCategory === cat ? 'bg-white text-black' : 'bg-lux-surface text-zinc-400 border border-lux-border hover:border-zinc-500 hover:text-white'}">
                    ${cat}
                </button>
            `).join('');
        }

        function filterCategory(cat) {
            currentCategory = cat;
            renderCategories();
            let filtered = gamesData;
            if (cat !== "All Games") {
                filtered = gamesData.filter(g => g.category === cat);
            }
            renderProducts(filtered);
        }

        function handleSearch() {
            const query = document.getElementById('searchInput').value.toLowerCase().trim();
            const clearBtn = document.getElementById('clearSearchBtn');
            clearBtn.classList.toggle('hidden', query.length === 0);

            const filtered = gamesData.filter(g => 
                g.title.toLowerCase().includes(query) || 
                g.category.toLowerCase().includes(query) ||
                g.genre.toLowerCase().includes(query)
            );
            renderProducts(filtered);
        }

        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('clearSearchBtn').classList.add('hidden');
            renderProducts(gamesData);
        }

        function handleSort() {
            const val = document.getElementById('sortSelect').value;
            let list = [...gamesData];
            if (currentCategory !== "All Games") {
                list = list.filter(g => g.category === currentCategory);
            }

            if (val === 'price-low') list.sort((a,b) => a.price - b.price);
            else if (val === 'price-high') list.sort((a,b) => b.price - a.price);
            else if (val === 'rating') list.sort((a,b) => b.rating - a.rating);

            renderProducts(list);
        }

        function renderProducts(products) {
            const grid = document.getElementById('productGrid');
            if (products.length === 0) {
                grid.innerHTML = `
                    <div class="col-span-full py-16 text-center space-y-2">
                        <p class="text-sm text-zinc-400">No titles match your criteria.</p>
                    </div>
                `;
                return;
            }

            grid.innerHTML = products.map(game => `
                <div class="glass-card rounded-2xl overflow-hidden hover-lift flex flex-col justify-between">
                    <div class="relative h-48 overflow-hidden cursor-pointer" onclick="openQuickView(${game.id})">
                        <img src="${game.image}" alt="${game.title}" class="w-full h-full object-cover object-center filter contrast-105">
                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md text-[10px] font-semibold tracking-widest uppercase text-zinc-300 border border-white/10">
                            ${game.badge}
                        </span>
                    </div>

                    <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center justify-between text-[11px] text-zinc-400 mb-1">
                                <span>${game.genre}</span>
                                <span class="text-white font-medium"><i class="fa-solid fa-star text-xs mr-1 text-amber-400"></i>${game.rating}</span>
                            </div>
                            <h3 onclick="openQuickView(${game.id})" class="font-bold text-sm text-white hover:text-lux-violet cursor-pointer line-clamp-1 transition-colors">
                                ${game.title}
                            </h3>
                        </div>

                        <div class="flex items-center justify-between pt-3 border-t border-lux-border">
                            <div>
                                <span class="text-xs text-zinc-500 line-through">€${game.originalPrice.toFixed(2)}</span>
                                <div class="font-bold text-sm text-white">€${game.price.toFixed(2)}</div>
                            </div>
                            <button onclick="addToCart(${game.id})" class="px-4 py-2 rounded-full bg-white/5 hover:bg-white text-zinc-300 hover:text-black border border-lux-border font-semibold text-xs transition-all">
                                Add to Bag
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function openQuickView(id) {
            const game = gamesData.find(g => g.id === id);
            if (!game) return;

            document.getElementById('quickViewContent').innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <img src="${game.image}" alt="${game.title}" class="w-full h-64 object-cover rounded-2xl border border-lux-border">
                    <div class="space-y-4 flex flex-col justify-between">
                        <div>
                            <span class="px-3 py-1 rounded-full bg-white/10 text-[10px] uppercase tracking-widest text-zinc-300">
                                ${game.category}
                            </span>
                            <h2 class="text-xl font-bold text-white mt-2">${game.title}</h2>
                            <p class="text-xs text-zinc-400 mt-2 leading-relaxed">${game.description}</p>
                        </div>

                        <div class="grid grid-cols-2 gap-3 text-xs border-y border-lux-border py-3 text-zinc-400">
                            <div>Platform: <strong class="text-white">${game.platforms.join(', ')}</strong></div>
                            <div>Size: <strong class="text-white">${game.fileSize}</strong></div>
                            <div>Genre: <strong class="text-white">${game.genre}</strong></div>
                            <div>Released: <strong class="text-white">${game.releaseYear}</strong></div>
                        </div>

                        <div class="flex items-center justify-between pt-2">
                            <span class="text-2xl font-bold text-white">€${game.price.toFixed(2)}</span>
                            <button onclick="addToCart(${game.id}); closeQuickView();" class="px-6 py-2.5 rounded-full bg-white text-black font-semibold text-xs uppercase tracking-wider hover:bg-zinc-200 transition-all">
                                Acquire Digital Key
                            </button>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById('quickViewModal').classList.remove('hidden');
        }

        function closeQuickView() {
            document.getElementById('quickViewModal').classList.add('hidden');
        }

        function addToCart(id) {
            const item = cart.find(c => c.id === id);
            if (item) item.qty++;
            else {
                const game = gamesData.find(g => g.id === id);
                cart.push({ ...game, qty: 1 });
            }
            updateCartUI();
            showToast("Item added to bag");
        }

        function updateQuantity(id, change) {
            const item = cart.find(c => c.id === id);
            if (!item) return;
            item.qty += change;
            if (item.qty <= 0) cart = cart.filter(c => c.id !== id);
            updateCartUI();
        }

        function updateCartUI() {
            const count = cart.reduce((sum, i) => sum + i.qty, 0);
            document.getElementById('cartBadge').innerText = count;

            const list = document.getElementById('cartItemsList');
            if (cart.length === 0) {
                list.innerHTML = `<p class="text-center text-xs text-zinc-500 py-12">Your bag is empty.</p>`;
            } else {
                list.innerHTML = cart.map(item => `
                    <div class="flex items-center gap-4 p-3 glass-card rounded-xl">
                        <img src="${item.image}" class="w-12 h-12 object-cover rounded-lg border border-lux-border">
                        <div class="flex-grow">
                            <h4 class="text-xs font-bold text-white line-clamp-1">${item.title}</h4>
                            <span class="text-xs text-zinc-400">€${item.price.toFixed(2)}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button onclick="updateQuantity(${item.id}, -1)" class="w-6 h-6 rounded-full bg-lux-surface text-zinc-400 hover:text-white flex items-center justify-center text-xs border border-lux-border">-</button>
                            <span class="text-xs font-bold text-white">${item.qty}</span>
                            <button onclick="updateQuantity(${item.id}, 1)" class="w-6 h-6 rounded-full bg-lux-surface text-zinc-400 hover:text-white flex items-center justify-center text-xs border border-lux-border">+</button>
                        </div>
                    </div>
                `).join('');
            }

            const total = cart.reduce((sum, i) => sum + (i.price * i.qty), 0);
            document.getElementById('cartTotal').innerText = `€${total.toFixed(2)}`;
        }

        function toggleCartDrawer() {
            const panel = document.getElementById('cartPanel');
            const backdrop = document.getElementById('cartBackdrop');
            const drawer = document.getElementById('cartDrawer');
            const isOpen = !panel.classList.contains('translate-x-full');

            if (isOpen) {
                panel.classList.add('translate-x-full');
                backdrop.classList.add('opacity-0');
                setTimeout(() => drawer.classList.add('pointer-events-none'), 300);
            } else {
                drawer.classList.remove('pointer-events-none');
                panel.classList.remove('translate-x-full');
                backdrop.classList.remove('opacity-0');
            }
        }

        function openCheckoutModal() {
            if (cart.length === 0) return;
            const summary = document.getElementById('checkoutSummary');
            summary.innerHTML = cart.map(i => `
                <div class="flex justify-between">
                    <span>${i.title} (x${i.qty})</span>
                    <span class="font-bold text-white">€${(i.price * i.qty).toFixed(2)}</span>
                </div>
            `).join('');
            
            toggleCartDrawer();
            document.getElementById('checkoutModal').classList.remove('hidden');
        }

        function closeCheckoutModal() {
            document.getElementById('checkoutModal').classList.add('hidden');
        }

        function completeOrder() {
            cart = [];
            updateCartUI();
            closeCheckoutModal();
            showToast("Order completed! Digital keys sent.");
        }

        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toastMsg').innerText = msg;
            toast.classList.remove('translate-y-24', 'opacity-0');
            setTimeout(() => {
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3000);
        }
    </script>
</body>
</html>