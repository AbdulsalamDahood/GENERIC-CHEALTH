<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li>
                    <i class="fa fa-home"></i>
                    &nbsp;
                    <span class="parent-item">Dashboard</span>
                </li>

            </ol>
        </div>
    </div>
    <!-- start widget -->

    
    <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-green">
                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Students</span>
                        <span class="info-box-number"><?=$aval_student["all"]?></span>
                        
                        <span class="progress-description">
                            Total Number Of Students
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-yellow">
                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Students</span>
                        <span class="info-box-number"><?=$date;?></span>
                        
                        <span class="progress-description">
                            Increase in 30 Days
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-blue">
                    <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Course</span>
                        <span class="info-box-number"><?=$allcourse;?></span>
                        
                        <span class="progress-description">
                            Total Number Of Course
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-pink">
                    <span class="info-box-icon push-bottom"><i class="material-icons">&#8358</i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fees Collection</span>
                        <span class="info-box-number"><?php echo number_format($totalfee)." ";?></span><span>&#8358</span>
                        
                        <span class="progress-description">
                            Total Amount Of Fees
                            </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                </div>
        </div>
    <!-- end widget -->















        <!-- chart start -->
    <div class="row">
        <div class="col-sm-8">
            <div class="card-box">
                <div class="card-head">
                    <header>Todo List</header>
                </div>

                <div class="card-body scrollable">
                    <ul class="to-do-list">
                        <?php if($user_todo_lenght > 0):?>
                            <?php foreach($user_todo_obj as $todo):?>
                                <li class="clearfix">

                                    <div class="todo-check pull-left">
                                        <input <?php if($todo->status == 1){echo "checked";}?> type="checkbox" value="<?=$todo->id;?>" id="todo-check-<?=$todo->id;?>">
                                        <label for="todo-check-<?=$todo->id;?>"></label>
                                    </div>

                                    <p class="todo-title <?php if($todo->status == 1){echo "line-through";}?> ">
                                        <?=$todo->todo;?>
                                    </p>

                                    <div class="todo-actionlist pull-right clearfix">
                                        <a href="#" data-todo-id="<?=$todo->id;?>"  class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>

                        <?php if($user_todo_lenght = 0):?>

                        <?php endif;?>

                        

                    </ul>
                </div>

                <div class="col-lg-12 p-t-20"> 
                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class = "todo-list-text mdl-textfield__input" type = "text" id = "txtRollNo">
                        <label class = "mdl-textfield__label" >Add New Todo List</label>
                    </div>
                </div> 
                <div class="col-lg-12 p-t-20 text-center"> 
                    <button type="button" class="todo-list-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                </div> 
            </div>
        </div>

        <div class="col-sm-4">
        <div class="card card-box">
                <div class="card-head">
                    <header>Aptech Survey</header>
                </div>
                <div class="card-body no-padding height-9">
                <div id="pie_student_data" 
                    data-all-student="<?=$aval_student["all"]?>" 
                    data-adse-student="<?=$aval_student["adse"]?>"  
                    data-cpism-student="<?=$aval_student["cpism"]?>"
                    data-dism-student="<?=$aval_student["dism"]?>"
                    data-msoffice-student="<?=$aval_student["msoffice"]?>"
                    data-ittest-student="<?=$aval_student["ittest"]?>"
                    data-ccna-student="<?=$aval_student["ccna"]?>"
                    data-others-student="<?=$aval_student["others"]?>"
                    ></div>
                <div class="row">
                    <canvas id="chartjs_pie"></canvas>
                </div>
            </div>
            </div>
        </div>
    </div>
        <!-- Chart end -->

       <!-- start new student list -->
    
    
</div>