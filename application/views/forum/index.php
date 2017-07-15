<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="<?php echo site_url('forum/create') ?>" class="btn btn-success pull-right" type="button" >创建帖子</a>
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $title ?></div>

                <div class="panel-body">
                    <?php foreach ($threads as $thread): ?>
                      <article>
                        <a href="<?php echo site_url('forum/view/'.$thread['id']);?>">
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
