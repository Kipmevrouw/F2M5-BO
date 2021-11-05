<?php $this->layout('layouts::website');?>
<div class="Dashboard">
    <div class="form-floating">
        <form action="<?php echo url('comments.save')?>" method ="POST" class ="form">
        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px width: auto;"></textarea>
        <label for="floatingTextarea2">Comments</label>
        <button type="submit" class="btn btn-success" style="text-align: center;">Plaatsen</button>
        </form>
    </div>

</div>