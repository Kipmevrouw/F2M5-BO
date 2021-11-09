<?php $this->layout('layouts::adminwebsite');?>
<div class="container" style="background: rgba(244, 250, 255);">
    <div class="form-floating">
        <form action="<?php echo url('admin.savecomment')?>" method ="POST" >
        <input type="text" name="title" placeholder="Blog Title" class="form-control text-dark my-3 text-center">
        <textarea name="content" class="form-control text-dark my-3 text-center" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 50px width auto"></textarea>
        <button type="submit" name="new_post" class="btn btn-success text-center" style="text-align: center;">Plaatsen</button>
        </form>
    </div>
    <div class="row">
        <?php
        $connection = dbConnect();
        $sql        = "SELECT * FROM data";
        $statement  = $connection->query( $sql );
        $query     = $statement->fetchAll();
        ?>
        <?php foreach($query as $q):?>
            <div class="col-6 d-flex justify-content align-items-center">
                <div class="card text-white bg-secondary mt-5">
                    <div class="card-body" style="width: 18rem;">
                        <h5 class="card-title"><?php echo $q['title'];?></h5>
                        <p class="card-text"><?php echo $q['content'];?></p>
                        <p class="card-text"><?php echo	$q['user']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>