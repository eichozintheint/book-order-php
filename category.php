<?php
include_once 'controller/CategoryController.php';
include_once 'layout/header.php';

session_start();

$category_controller=new CategoryController();
$categories=$category_controller->getCategories();

?>
<div class="main">
        <aside class="sidebar">
            <h2 class="text-dark">Categories</h2>

            <?php
                foreach($categories as $category)
                {
                    echo "<a href='booksByCategory.php?id=".$category['id']."'>".$category['name']."</a><hr/>";
                }
            ?>

            
            
        </aside>
        <main class="sidebar-content">
            <h2> Health and Medical</h2>
            <div class="d-flex flex-wrap">
                <div class="card m-3" style="width: 18rem;">
                 
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                 
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card m-3" style="width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
            
        </main>
</div>
<?php 
include_once 'layout/footer.php';
?>
