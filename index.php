<?php
    require_once 'class/dbconnect.php';
    require_once 'class/post.php';
    require_once 'class/category.php';
    require_once 'lib/function.php';

?>
<!DOCTYPE html>
    <?php require_once  'head.php';?>
    <body>
        <div class="container">
                 <div class="row">
            <div class="col-md-4">
                <img src="images/logo.png"></div>
            <div class="col-md-4"></div>

            <div style="float: right" ><a href="login.php" class="btn btn-success">Вход</a></div>
            <div style="float: right" ><a href="registration.php" class="btn btn-success">Регистрация</a></div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div id="letter-container" class="letter-container">
                        <h2>
                            <a href="#">Music</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-3">
                   
                    <div class="btn-group btn-group-vertical">

                      <h3>Категории</h3>

                    <?php
                        $menu=new Category();
                        $arr=$menu->getAllCategories();
                        createMenu($arr);
                    ?>
                    </div>
                </div>
                <div class="col-md-9">
                   <?php  
                        $postObj= new Post();
                        $postObj->getFiveLastPosts($limit=5);
                   ?>
                </div>
            </div>
            <?php require_once 'footer.php'; ?>








