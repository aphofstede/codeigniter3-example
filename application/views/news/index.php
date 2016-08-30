<a href="/news/create" class="btn btn-info" role="button">Add news</a>
<?php foreach ($news as $news_item): ?>
    <div class="row">
        <div class="col-lg-8">

            <!-- the actual news item: title/author/date/content -->
            <h1>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a>
            </h1>
            <p class="lead">
                <i class="fa fa-user"></i> by <a href=""><?= isset($user) ? $user['name'] : 'Unknown' ?></a>
            </p>
            <hr>
            <p>
                <i class="fa fa-calendar"></i> Posted on <?= isset($user) ? $news_item['formatted_date'] : 'Unknown' ?>
            </p>
            <hr>
            <p class="lead"><?php echo $news_item['text']; ?></p>
            <br/>
        </div>
    </div>
<?php endforeach; ?>
