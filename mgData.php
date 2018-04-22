<?php

header('Content-Type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
$title = $_GET['title'];
$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

switch ($title){
    case 'banner':
        $arr = array(
            dirname($url).'/img/1-banner/1.jpg',
            dirname($url).'/img/1-banner/2.jpg',
            dirname($url).'/img/1-banner/3.jpg',
        );
        echo json_encode($arr);
        break;
    case 'navIcon':
        $arr = array(
            array(
                'pic' => dirname($url).'/img/2-navIcon/1.gif',
                'con' => '1分夺宝'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/2.jpg',
                'con' => '9.9包邮'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/3.gif',
                'con' => '限时快抢'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/4.jpg',
                'con' => '返校套装'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/5.png',
                'con' => '签到'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/6.jpg',
                'con' => '两件套49'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/7.jpg',
                'con' => '小个运动鞋'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/8.png',
                'con' => '29元美妆'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/9.jpg',
                'con' => '男装热卖'
            ),
            array(
                'pic' => dirname($url).'/img/2-navIcon/10.gif',
                'con' => '已抢7000件'
            ),
        );
        echo json_encode($arr);
        break;
    case 'rushBuy':
        break;
    case 'groupBuy':
        break;
    case 'cheap':
        break;
    case 'like':
        $arr = array(
            array(
                'pic' => dirname($url).'/img/7-like/1.jpg',
                'label' => array('吊带连衣裙','网纱','明星同款','韩版'),
                'price' => '¥79',
                'collection' => '555',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/2.jpg',
                'label' => array('棒球服','宽松','韩范','白色','新款'),
                'price' => '¥69.3',
                'collection' => '834',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/3.jpg',
                'label' => array('时尚套装','春季','新款'),
                'price' => '¥51.69',
                'collection' => '9608',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/4.jpg',
                'label' => array('熊毛绒玩具','泰迪','女生'),
                'price' => '¥68.6',
                'collection' => '967',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/5.jpg',
                'label' => array('洗鞋神器','去黄'),
                'price' => '¥68.6',
                'collection' => '967',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/6.jpg',
                'label' => array('尖头单鞋','浅口','一脚蹬','扣带','懒人','百搭','韩版'),
                'price' => '¥68.6',
                'collection' => '984',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/7.jpg',
                'label' => array('时尚套装','中长款针织','春季','日系','字母'),
                'price' => '¥68',
                'collection' => '1.3w',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/8.jpg',
                'label' => array('鸽鸽','大礼包','超大','一箱'),
                'price' => '¥78.99',
                'collection' => '398',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
            array(
                'pic' => dirname($url).'/img/7-like/9.jpg',
                'label' => array('百搭帆布鞋','小清新','学院风','新款','春季','韩版'),
                'price' => '¥39.9',
                'collection' => '929',
                'collectIcon' => dirname($url).'/img/7-like/icon.jpg'
            ),
        );
        echo json_encode($arr);
        break;
        case 'endDate':
            $arr = array(
                'year'=>2018,
                'mon'=>2,
                'date'=>13,
                'hour'=>0,
                'min'=>0,
                'sec'=>0
            );
            echo json_encode($arr);
            break;
}