<div class="panel panel-default">
    <div class="panel-heading"><?php echo $thread['name'] ?></div>

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
