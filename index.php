<?php 
require_once('header.php');

?>

<div class="container">
    <div class="weather">
        <div class="main">
            <h2 class="city"><?=$location['name']?></h2>
            <h1 class="temp"><?=$info['temp_c']?>°C</h1>
            <img src="<?=$info_condition['icon']?>" alt=""><br>
            <h3 class="weatherinfo" id="weather"><?=$info_condition['text']?></h3>
        </div>
        <div class="info">
            <?php
            echo 'Ветер: ' . $info['wind_kph'] . ' метра<br>';
            echo 'Дата и время: ' . $location['localtime'] . '<br>';
            echo 'Последнее обновление: ' . $info['last_updated'] . '<br>';
            ?>
        </div>
        <div class="change_city">
            <form action="/" method="get" id="cityForm">
                <label class="selectCity" for="citySelect">Выберите город</label><br>
                <select name="city" id="citySelect">
                    <option></option>
                    <?php 
                    foreach($response2 as $array){
                        if(is_array($array)){
                            foreach($array as $city){
                                ?>
                                <option value="<?=$city['city']?>"><?=$city['city']?></option>
                                <?php
                            }
                        }
                    }
                    ?>
                </select><br>
                <label>Или</label><br> 
                
            </form>
            <form action="/" method="get">
                <input type="text" name="city" placeholder="Введите название города">
                <input type="submit" placeholder="Посмотреть">
            </form>
        </div>
    </div>
</div>


<?php 
require_once('footer.php');
?>