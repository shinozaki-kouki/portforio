<?php
// Template Name: blog
?>
<?php get_header(); ?>
<div class=font>
    <div class="left">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="blog">
        <main>
            <h1 id="title"></h1>
            <hr>
            <div id="body"></div>
            <h1 id="title2"></h1>
            <hr>
            <div id="body2"></div>
            <h1 id="title3"></h1>
            <hr>
            <div id="body3"></div>
        </main>
        <script>
            fetch("https://s-portfolio.microcms.io/api/v1/blog/dh7-j01e9v5a", {
                    headers: {
                        "X-API-KEY": "cc9652d1-c01e-44a4-bf49-bb5054d67211"
                    }
                })
                .then(res => res.json())
                .then(json => {
                    document.getElementById("title").innerHTML = json.title;
                    document.getElementById("body").innerHTML = json.body;
                })
            fetch("https://s-portfolio.microcms.io/api/v1/blog/50-p9s0_m", {
                    headers: {
                        "X-API-KEY": "cc9652d1-c01e-44a4-bf49-bb5054d67211"
                    }
                })
                .then(res => res.json())
                .then(json => {
                    document.getElementById("title2").innerHTML = json.title;
                    document.getElementById("body2").innerHTML = json.body;
                })
            fetch("https://s-portfolio.microcms.io/api/v1/blog/s-tc80ag9lb", {
                    headers: {
                        "X-API-KEY": "cc9652d1-c01e-44a4-bf49-bb5054d67211"
                    }
                })
                .then(res => res.json())
                .then(json => {
                    document.getElementById("title3").innerHTML = json.title;
                    document.getElementById("body3").innerHTML = json.body;
                })
        </script>
    </div>
</div>
<div class="pager">
    <ul class="pagination">
        <li class="pre"><a href="<?php echo home_url('/blog'); ?>"><span>«</span></a></li>
        <li><a href="<?php echo home_url('/blog'); ?>" class="active"><span>1</span></a></li>
        <li><a href="<?php echo home_url('/blog-2'); ?>"><span>2</span></a></li>
        <li class="next"><a href="<?php echo home_url('/blog-2'); ?>"><span>»</span></a></li>
    </ul>
</div>
</div>

<?php get_footer();
