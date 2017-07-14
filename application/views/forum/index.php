<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $title ?></div>

                <div class="panel-body">
                    <?php foreach ($threads as $thread): ?>
                      <article>
                        <a href="#">
                          <h4><?php echo $thread['title']; ?></h4>
                        </a>
                          <div class="body"><?php echo $thread['body']; ?></div>
                      </article>
                      <hr>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
