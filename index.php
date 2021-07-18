<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <link rel="stylesheet" href="css/null.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        require_once 'libs/Products.php';
        $con = new Products();
    ?>

    <section class="second">
        <div class="container">
            <h2>Ассортимент</h2>
            <form action="">
                <h3>Молочная продукция</h3>
                <div class="items milk">
                    <?php
                    $milk = $con->getMilkProd();
                    foreach ($milk as $item){
                        echo '<div class="item">
                        <div class="card">
                            <img src="img/test.jpg" alt="">
                            <h4>'.$item['ProductName'].'</h4>
                            <h5>'.$item['ProductWeight'].' кг</h5>
                            <h6>'.$item['ProductPrice'].' руб</h6>
                        </div>
                        <div class="number">
                            <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                            <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                            <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
                <h3>Мясная продукция</h3>
                <div class="categories">
                    <div class="btn cat1"><p>Говядина</p></div>
                    <div class="btn cat2"><p>Свинина</p></div>
                    <div class="btn cat3"><p>Птица</p></div>
                    <div class="btn cat4"><p>Кролик</p></div>
                    <div class="btn cat5"><p>Баранина</p></div>
                </div>
                <div class="items meat">
                    <?php
                        $meat = $con->getMeatProd();
                        $prv = 'img/test.jpg';
                        echo '<div class="cat_1 visible">';
                        foreach ($meat as $item){

                            if ($item['cat_id'] == 1){
                                if ($item['preview'])
                                {
                                    $prv = $item['preview'];
                                }
                                else {
                                    $prv = 'img/test.jpg';
                                }
                                echo '
                                <div class="item">
                                    <div class="card">
                                        <img src="'.$prv.'" onerror="standby()">
                                        <h4>'.$item['name'].'</h4>
                                        <h5>'.$item['weight'].' кг</h5>
                                        <h6>'.$item['price'].' руб</h6>
                                    </div>
                                    <div class="number">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                                        <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                                    </div>
                                </div>
                        ';
                            }
                        }
                        echo '</div>';
                    echo '<div class="cat_2 hidden">';
                    foreach ($meat as $item){
                        if ($item['cat_id'] == 2){
                            if ($item['preview'])
                            {
                                $prv = $item['preview'];
                            }
                            else {
                                $prv = 'img/test.jpg';
                            }
                            echo '
                            
                                <div class="item"">
                                    <div class="card">
                                        <img src="img/test.jpg" alt="">
                                        <h4>'.$item['name'].'</h4>
                                        <h5>'.$item['weight'].' кг</h5>
                                        <h6>'.$item['price'].' руб</h6>
                                    </div>
                                    <div class="number">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                                        <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                                    </div>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';
                    echo '<div class="cat_3 hidden">';
                    foreach ($meat as $item){
                        if ($item['cat_id'] == 3){
                            if ($item['preview'])
                            {
                                $prv = $item['preview'];
                            }
                            else {
                                $prv = 'img/test.jpg';
                            }
                            echo '
                            
                                <div class="item"">
                                    <div class="card">
                                        <img src="img/test.jpg" alt="">
                                        <h4>'.$item['name'].'</h4>
                                        <h5>'.$item['weight'].' кг</h5>
                                        <h6>'.$item['price'].' руб</h6>
                                    </div>
                                    <div class="number">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                                        <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                                    </div>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';

                    echo '<div class="cat_4 hidden">';
                    foreach ($meat as $item){
                        if ($item['cat_id'] == 4){
                            if ($item['preview'])
                            {
                                $prv = $item['preview'];
                            }
                            else {
                                $prv = 'img/test.jpg';
                            }
                            echo '
                            
                                <div class="item"">
                                    <div class="card">
                                        <img src="img/test.jpg" alt="">
                                        <h4>'.$item['name'].'</h4>
                                        <h5>'.$item['weight'].' кг</h5>
                                        <h6>'.$item['price'].' руб</h6>
                                    </div>
                                    <div class="number">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                                        <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                                    </div>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';
                    echo '<div class="cat_5 hidden">';
                    foreach ($meat as $item){
                        if ($item['cat_id'] == 5){
                            if ($item['preview'])
                            {
                                $prv = $item['preview'];
                            }
                            else {
                                $prv = 'img/test.jpg';
                            }
                            echo '
                            
                                <div class="item"">
                                    <div class="card">
                                        <img src="img/test.jpg" alt="">
                                        <h4>'.$item['name'].'</h4>
                                        <h5>'.$item['weight'].' кг</h5>
                                        <h6>'.$item['price'].' руб</h6>
                                    </div>
                                    <div class="number">
                                        <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange(); total -= 330;">-</button>
                                        <input type="number" min="0" value="0" name="milk_'.$item['ProductID'].'" readonly>
                                        <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange(); total += 330;">+</button>
                                    </div>
                                </div>
                        ';
                        }
                    }
                    echo '</div>';

                    ?>
                </div>
                <h4>Для оформления заказа</h4>
                <div class="cust">
                    <input type="text" placeholder="Введите имя">
                    <input type="email" placeholder="Введите email">
                    <input type="phone" placeholder="Введите телефон">
                    <input type="submit" value="Заказать">
                </div>
            </form>
            <div class="map">
                <div class="txt">* После заполнения формы на ваш E-mail и WhatsApp будет отправлено
                    информационное сообщение, с помощью которого вас уведомят о наличии/отсутствии
                    товара и сроках ближайшей доставки.</div>
                <div class="map_item">
                    <img src="img/map.jpg" alt="">
                </div>
            </div>
            <div class="about">
                <img src="img/about1.png" alt="">
                <p>Фермерское хозяйство находится в Тверской области Г. Кашин.
                    Животные проводят большое количество времени на воздухе и подлежат чуткому ежедневному уходу.
                    Благодаря удаленности от города, экологически чистой атмосфере и наблюлюдению ветеринаров, наша продукция соответсвует всем стандартам качества.
                </p>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>

</body>
</html>