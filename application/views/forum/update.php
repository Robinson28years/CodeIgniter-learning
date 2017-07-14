<div class="container">
    <?php echo validation_errors(); ?>
    <?php echo form_open('forum/update/'.$thread['id']); ?>
      <div class="form-group">
        <label >标题</label>
        <input value="<?php echo $thread['title']; ?>"  class="form-control" placeholder="标题" name="title">
      </div>
      <div class="form-group">
        <label>文章</label>
        <textarea type="text" class="form-control" row="10" cols="180" placeholder="内容" name="body"><?php echo $thread['body']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-success">提交修改</button>
    </form>
</div>
