<?php
include 'temp/head_index.php';
include 'temp/navbar_index.php';
include 'temp/header_index.php';

$conn = mysqli_connect('localhost','root','','vakanty'); 


?>



<div class="course-area section-padding bg-white"> 
                   <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <p><h3>Образование</h3></p>
                                    </div>
                                </div>
                            </div>
                        </div>          
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/op.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text" itemprop="eduAccred">
                                        <h4><a href="#">Информация о реализуемых уровнях образования, о формах обучения, нормативных сроках обучения, сроке действия государственной аккредитации образовательной программы (при наличии государственной аккредитации), о языках, на которых осуществляется образование (обучение)</a></h4>
                                 <hr>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/accr.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация о профессионально-общественной аккредитации образовательной программы (при наличии)</a></h4>
                                        <hr>
                                        
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="PlanPriem.php"><img src="img/course/fin.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="PlanPriem.php">Информация о численности обучающихся по реализуемым образовательным программам по источникам финансирования</a></h4>
                                      
                                        <hr>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="PlanPriem.php" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/i.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация о результатах приема</a></h4>
                                        
                                        <hr> 
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/rpo.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация о результатах перевода, восстановления и отчисления</a></h4>
                                        <hr>
                                         
                               
                                     
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4 hidden-sm">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/info.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация об образовательной программе</a></h4>
                                        <hr>
  
                                        
                                      
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/adapt.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация об адаптированной образовательной программе</a></h4>
                                        <hr>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="single-item" style="width: 25rem; height: 30rem;">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="img/course/result.jpg" alt="" Length="150" Width="200"></a>
                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Информация о направлениях и результатах научной (научно-исследовательской) деятельности и научно-исследовательской базе для ее осуществления (для образовательных организаций высшего образования и организаций дополнительного профессионального образования)</a></h4>
                                        <hr>
                                    </div>
                                    <div class="button-bottom">
                                        <a href="#" class="button-default">Смотреть</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
	
<?php
include 'temp/footer_index.php';
?>