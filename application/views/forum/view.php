<div class="panel panel-default">
    <div class="panel-heading"
    ><?php echo $thread['name'] ?>
    <a href="<?php echo site_url('forum/update/'.$thread['id']) ?>" class="btn btn-sm btn-success pull-right" type="button" >修改</a>
    </div>

    <div class="panel-body">
          <article>
            <a href="<?php echo site_url('forum/view/'.$thread['id']);?>">
              <h4><?php echo $thread['title']; ?></h4>
            </a>
              <div class="body"><?php echo $thread['body']; ?></div>
          </article>
          <hr>
    </div>
</div>

<div class="col-md-8">
  <?php foreach( $replies as $reply): ?>
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>

        <div class="panel-body">
          <div class="body"><?php echo $reply['body'] ?></div>
        </div>
    </div>
<?php endforeach; ?>

</div>
