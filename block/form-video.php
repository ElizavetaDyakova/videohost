<?php include("connect.php");
$name = $_POST['name'];
$author = $_SESSION['id'];
$desc_video = $_POST['desc_video'];
$categ = $_POST['categ'];
$v_file = $_POST['v_file'];

if(isset($name) && isset($desc_video) && isset($categ) && isset($v_file)){
    if ($name != "" && $categ!= "" && $v_file!= ""){
        
        $db->query("INSERT INTO `videos` (`id`, `name`, `author`, `like_count`, `dis`, `date`, `ogr`, `comm_id`, `descr`, `categ`, `file`) 
        VALUES (NULL, '$name', '$author', '0', '0', CURRENT_TIMESTAMP, '0', '1', '$desc_video', '1', '$v_file');");
        echo "nice bro";
    }
}


?>




<form role="form" id="create-video" method="POST">
        <div class="form-group has-feedback">
                            <label class="sr-only" for="name-video">Введите название ролика</label>
                            <input type="text" class="form-control" id="name-video" placeholder="Введите название ролика" name="name-video" required>
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="desc_video">Описание ролика</label>
                            <input type="text" class="form-control" id="desc_video" placeholder="Описание ролика" name="desc_video" >
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="categ">Категория</label>
                            <select class="form-control" id="categ" placeholder="выберите категорию" name="categ" required>
							<option value="">Выберите</option>
                            <?php
                            
                                $getcat = $db->query("SELECT `id`, `name` FROM `category`");
                                // $cat = mysqli_fetch_array($getcat);
                                foreach($getcat as $c){
                                    
                                echo '<option value="$c["id"]">' . $c["name"] . '</option>';
                            } ?>
							
							</select>
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>	
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="v_file">Выберите файл</label>
                            <input type="file" class="form-control" id="v_file" accept="video/mp4" placeholder="Выберите файл" name="v_file" required>
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>		
						<input type="submit" value="Загрузить" class="btn btn-default">											
        </form>