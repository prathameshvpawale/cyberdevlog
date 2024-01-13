<?php
include('header.php');
include('post.php');
include('Tag.php')
?>
<?php
$post = new Post($db);
$tags = new Tag($db);
?>

<div class="container d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-md-8">
        <?php foreach($post->getPost() as $post) { ?>
            <div class="media">



            <div class="card mb-3">
  <img class="card-img-top" src="images/<?php echo $post['image']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="view.php?slug=<?php echo $post['slug'];?>"><?php echo $post['title']; ?></a></h4>
                  <?php echo htmlspecialchars_decode(substr($post['description'],0,100));?></h5>
    <p class="card-text">Author:Admin<br>
          						Created:<?php echo date('Y-m-d',strtotime($post['created_at'])); ?></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
        </div>

            
<!-- tags visibal code -->
            <?php } ?>

            <div class="">
            	<h4>Browse by Tags</h4>
            	<p>
            	<?php
            	foreach($tags->getAllTags() as $tag){?>
            		<a href="index.php?tag=<?php  echo $tag['tag'];?>"><button type="button" class="btn btn-primary btn-lg">
            			<?php  echo $tag['tag'];?>
            		</button></a>

            	<?php  } ?>

            	</p>

        </div>
    </div>
</div>
</div>
</div>

<!-- <style type="text/css">
    body{
        text-align: justify;
    }
    img{
        margin-right: 10px;
    }
    .media{
        margin-top: 20px;
    }
</style> -->
