@include('header')
<link rel="stylesheet" href="{{asset('css/new.css')}}">
<style>
    body {
        background-color: black;
    }

    .container {
        max-width: 90%;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Hero Section */
    .hero {
        /*position: relative;*/
        /*height: 14%;*/
        width: 100%;
    }

    .hero-bg-image {
        border-radius: 1rem;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .navbar {
        position: relative !important;
    }

    .hero-content {
        position: relative;
        top: 50%;
        left: 50px;
        transform: translateY(-50%);
        color: white;
        z-index: 1;
    }

    .hero h1 {
        font-size: 48px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    .hero-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 20px;
    }

    .author-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ff6b6b;
    }

    .hero-image {
        position: absolute;
        right: 50px;
        top: 50%;
        transform: translateY(-50%);
        width: 300px;
        height: 300px;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><rect width="300" height="300" fill="%23ff6b6b" rx="20"/><rect x="50" y="50" width="200" height="200" fill="white" rx="10"/></svg>');
        background-size: contain;
    }

    /* Main Layout */
    .main-layout {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 40px;
        margin: 40px 0;
    }

    /* Content Area */
    .content {
        background: white;
        border-radius: 12px;
        padding: 40px;
    }

    .breadcrumb {
        color: #666;
        font-size: 14px;
        margin-bottom: 30px;
    }

    .article-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #333;
    }

    .article-content {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 30px;
    }

    .article-image {
        width: 100%;
        height: 300px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        border-radius: 8px;
        margin: 30px 0;
    }

    /* Sidebar */
    .sidebar {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .widget {
        background: white;
        border-radius: 12px;
        padding: 25px;
    }

    .widget-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
    }

    /* Search Widget */
    .search-box {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #eee;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
    }

    .search-box:focus {
        border-color: #667eea;
    }

    /* Recent Posts Widget */
    .recent-post {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .recent-post-thumb {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        flex-shrink: 0;
    }

    .recent-post-thumb.thumb1 {
        background: linear-gradient(45deg, #667eea, #764ba2);
    }

    .recent-post-thumb.thumb2 {
        background: linear-gradient(45deg, #f093fb, #f5576c);
    }

    .recent-post-thumb.thumb3 {
        background: linear-gradient(45deg, #4facfe, #00f2fe);
    }

    .recent-post-content h4 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #333;
    }

    .recent-post-meta {
        font-size: 12px;
        color: #666;
    }

    /* Newsletter Widget */

    .newsletter p {
        font-size: 14px;
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .newsletter-form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .newsletter input {
        padding: 12px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
    }

    /* Social Widget */
    .social-links {
        display: flex !important;
        justify-content: space-evenly;
        gap: 10px;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: #667eea;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
    }

    /* Gallery Widget */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .gallery-item {
        aspect-ratio: 1;
        border-radius: 6px;
    }

    .gallery-item:nth-child(1) {
        background: linear-gradient(45deg, #667eea, #764ba2);
    }

    .gallery-item:nth-child(2) {
        background: linear-gradient(45deg, #f093fb, #f5576c);
    }

    .gallery-item:nth-child(3) {
        background: linear-gradient(45deg, #4facfe, #00f2fe);
    }

    .gallery-item:nth-child(4) {
        background: linear-gradient(45deg, #43e97b, #38f9d7);
    }

    .gallery-item:nth-child(5) {
        background: linear-gradient(45deg, #fa709a, #fee140);
    }

    .gallery-item:nth-child(6) {
        background: linear-gradient(45deg, #a8edea, #fed6e3);
    }

    /* Featured Videos Widget */
    .video-item {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
    }

    .video-thumb {
        width: 80px;
        height: 60px;
        background: linear-gradient(45deg, #667eea, #764ba2);
        border-radius: 6px;
        flex-shrink: 0;
    }

    .video-content h4 {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .video-meta {
        font-size: 12px;
        color: #666;
    }

    /* Hidden class for search filter */
    .hidden {
        display: none !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .main-layout {
            grid-template-columns: 1fr;
        }

        .hero h1 {
            font-size: 32px;
        }

        .hero-image {
            display: none;
        }
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
        text-transform: uppercase;
        letter-spacing: 1;
    }

    .tag {
        display: inline-block;
        padding: 8px 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        text-decoration: none;
        color: #333;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        transition: 0.3s;
        background-color: white;
    }

    .tag:hover {
        background-color: #e52829;
        border-color: #888;
        color: white;
    }
    .newsocial:hover {
    display: flex;
    text-decoration: none;
    color: #e52829;
}
</style>
<style>
    .latestimg{
    max-width: 22%;
    height: fit-content;
    border-radius: 0.5rem;
    }
    .newsocial {
    width: 50px;
    height: 50px;
    background: #202020;
    border-radius: 10%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
}
</style>
<div class="container">

    <!-- Main Layout -->
    <div class="main-layout">
        <!-- Content Area -->
        <main class="content">

            <h1 class="section-title mb-3 text-dark">{{ $blog->title }}</h1>

            <div class="article-content">
                @php
                    // Split content on each numbered section (1. 2. 3. etc.)
                    $sections = preg_split('/(?=\d+\.\s)/', $blog->disc);
                @endphp

                @foreach($sections as $section)
                    @if(trim($section) != '')
                        <p>{!! nl2br(e(trim($section))) !!}</p>
                    @endif
                @endforeach
            </div>
            <div style="display: flex;justify-content: space-between;">
                
            <p class="mb-0">{{$blog->upload_by}}</p>
            <p class="mb-0">{{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</p>
            </div>

        </main>

        <!-- Sidebar -->
        <aside class="sidebar">
            <section class="hero">
        <img src="https://dashboard.infinitemultiversemarketing.com/storage/app/public/{{ $blog->img }}"
            alt="Students working on laptops" class="hero-bg-image">
    </section>
            <!-- Search Widget -->
            <div class="widget">
                <h3 class="widget-title">All Tags</h3>
                <div class="tags">
                    @foreach(explode(',', $blog->tags) as $tag)
                        <a href="#" class="tag">{{ trim($tag) }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Recent Posts Widget -->
            <div class="widget">
                <input type="text" class="search-box mb-3" placeholder="Search..." id="searchInput">
                <h3 class="widget-title">Recent Post</h3>
                <div id="recentPosts">
                    @foreach($latest as $val)
                    <a href="{{ route('blogdetail', ['id' => encrypt($val->id)]) }}">
                    <article class="recent-post" data-title="apple design award winners apps">
                        <img class="latestimg" src="https://dashboard.infinitemultiversemarketing.com/storage/app/public/{{ $val->img }}" alt="Tony Stark Marketing">
                        <div class="recent-post-content">
                            <h4>{{$val->title}}</h4>
                            <div class="recent-post-meta">{{ \Carbon\Carbon::parse($val->created_at)->format('d-m-Y') }}</div>
                        </div>
                    </article>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Social Widget -->
            <div class="widget">
                <h3 class="widget-title">Stay in Touch</h3>
                <div class="social-links">
                    <a class="newsocial" href="https://x.com/Marketinginfy" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a class="newsocial" href="https://www.facebook.com/infinitemultiversemarketing/" class="social-link"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="newsocial" href="https://www.youtube.com/@InfiniteMultiverseMarketing" class="social-link"><i
                            class="fab fa-youtube"></i></a>
                    <a class="newsocial" href="https://www.instagram.com/infinitemultiversemarketing?igsh=MWltbjdmeTdkZGdndw=="
                        class="social-link"><i class="fab fa-instagram"></i></a>
                    <a class="newsocial" href="https://www.linkedin.com/company/infinite-multiverse-marketing/?viewAsMember=true"
                        class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>

            </div>

        </aside>
    </div>
</div>
@include('footer')
<script>
    // Search functionality for Recent Posts
    document.getElementById('searchInput').addEventListener('input', function (e) {
        const searchTerm = e.target.value.toLowerCase();
        const posts = document.querySelectorAll('#recentPosts .recent-post');

        posts.forEach(post => {
            const title = post.getAttribute('data-title').toLowerCase();
            const postTitle = post.querySelector('h4').textContent.toLowerCase();

            if (title.includes(searchTerm) || postTitle.includes(searchTerm)) {
                post.classList.remove('hidden');
            } else {
                post.classList.add('hidden');
            }
        });
    });

    // Newsletter form submission
    document.querySelector('.newsletter-form').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Thank you for subscribing!');
    });
</script>