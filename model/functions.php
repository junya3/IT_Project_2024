<?php

//接続情報
$dbname = 'mysql:dbname=it_minibbs;host=localhost;charset=utf8;';
$user = 'root';
$password = '';


session_start();
var_dump('セッションIDは:',$_COOKIE['PHPSESSID']);

//ログインチェック用の関数を作成
function loginCheck(){
    if(isset($_SESSION["user"])){
        //セッション情報を取得
    }else{
        //home.phpに遷移
        header('Location: ./index.php');
        exit();
    }
}


//DBから SQLのデータを取得する
function getData($dbname,$user,$password,$sql){
    $error = [];
    //接続
    try{
        $dbh = new PDO($dbname, $user, $password);
        if ($dbh == null){
            $error += '接続に失敗しました。';
        }
    }catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }
    //クエリ
    $query = $sql;
    //クエリの実行
    $stmt = $dbh->query($query);
    //データの準備
    $data = [];
    //データを1行づつ $data配列に代入
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row;
    }
    //DBの切断
    $dbh;
    return $data;
}


// 新規登録 更新 削除用
//insert update delete
function setData($dbname,$user,$password,$sql){
    //接続
    try{
     $dbh = new PDO($dbname, $user, $password);
     if ($dbh == null){
         print('接続に失敗しました。<br>');
     }
     //クエリ
     $query = $sql;
     //クエリの実行
     $stmt = $dbh->prepare($query);
     //動作確認
     $flag = $stmt->execute();

     }catch (PDOException $e){
         print('Error:'.$e->getMessage());
         die();
     }
     //DBの切断
     $dbh = null;
     return $flag;
 }


 //ファイル登録の処理
 function filesSave($images,$date,$user_mail,$id,$dbname,$user,$password){

    //アップロードしたファイルがファイルが存在する時
    if(count($images) > 0){
        foreach($images as $val){
            //画像のデータを処理
            $filename = $val["name"]; //ファイル名
            $type = $val["type"]; //ファイルタイプ　.jpg .png;
            $tmp_name = $val["tmp_name"]; //仮アップした場所
            $error = $val["error"]; //エラー
            $size = $val["size"]; //ファイルサイズ

            //登録時間
            $date = date("Y-m-d-H-i-s");
            $up_file = '';
            if($error == 0 && $size < 2048000){
                if(
                    $type == 'image/jpeg'
                    ||
                    $type == 'image/gif'
                    ||
                    $type == 'image/png'
                    ||
                    $type == 'image/webp'
                    ){

                    //フォルダーが無ければ作成
                    if(!file_exists( dirname(__FILE__) ."/../images/{$user_mail}" )){
                        mkdir(dirname(__FILE__) ."/../images/{$user_mail}");
                    }
                    
                        $up_file = dirname(__FILE__) ."/../images/{$user_mail}/" . $date . '_' .$filename;
                        move_uploaded_file($tmp_name , $up_file);
                }
            }
            //ファイルをDBに登録
            if($filename !== ''){
                $fName = $date . '_' .$filename;
                $sql = "
                INSERT 
                INTO `images`
                (`user_mail`, `fileName`, `post_id`) 
                VALUES 
                ('{$user_mail}','{$fName}',$id)
                ";
                $flag = getData($dbname,$user,$password,$sql);
            }
        }
    }
 }

 //画像の取得
 function getImage($id,$dbname,$user,$password,$sql){
    $sql = "SELECT * FROM `images` WHERE `post_id` = $id";
    $imagsData = getData($dbname,$user,$password,$sql);


    foreach($imagsData as $val){
        echo "<img src='/20241105/itproject2024/images/{$val['user_mail']}/{$val['fileName']}' alt='' width='100%'>";
    }


 }