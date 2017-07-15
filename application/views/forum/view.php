<div class="panel panel-default">
    <div class="panel-heading"
    ><?php echo $thread['name'] ?>
    <?php if ($this->session->id == $thread['user_id']) {?>
    <a href="<?php echo site_url('forum/update/'.$thread['id']) ?>" class="btn btn-sm btn-success pull-right" type="button" >修改</a>
    <?php } ?>
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
            <?php echo $reply['name'] ?>
        </div>

        <div class="panel-body">
          <div class="body"><?php echo $reply['body'] ?></div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php if ($this->session->email != NULL) { ?>
<div class="col-md-8">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <?php echo validation_errors(); ?>
          <?php echo form_open('forum/reply/'.$thread['id']); ?>
          <label for="body">Body:</label>
          <textarea name="body" placeholder="写一点东西" rows="8" cols="80" class="form-controller"></textarea>
          <button type="submit"class="btn btn-success">提交</button>
        </form>
      </div>
    </div>
</div>
<?php } ?>
