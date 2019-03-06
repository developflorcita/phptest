<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, "ja_JP.utf8");
echo '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>';
echo "<font size=18><b>PHPテスト</b></font><br><br><br>";
echo "<b><u>質問1</u></b>　<br><br>";
echo '
<form action="index.php" method="post">
<input type="submit" value="Show current date and time in Japan" name="submit7">
</form><br>
';
function getDay()
{
    date_default_timezone_set("Asia/Tokyo");
    $date_format = "%Y/%m/%d %H:%M:%S";
    $date_string = strftime($date_format, time());
    echo $date_string. "<br><br>";
}
if (isset($_POST['submit7'])) {
    getDay();
}
echo "--------------------------- <br><br>";
echo "<b><u>質問2</u></b>　<br><br>";
echo '
<form action="index.php" method="post">
Name: <input type="text" name="name"><br><br>
<input type="submit" value="Convert to Hiragana" name="submit">
</form><br>
';
if (isset($_POST['submit'])) {
    $name = trim($_POST["name"]);
    $nameKata = str_replace('・', '', $name);
    include_once('convert_katakana_to_hiragana.php');

    $nameHira = convertKatakanaToHiragana::toHiragana($nameKata);
    //var_dump($nameHira);
    if ($nameHira != false) {
        echo $name . " is read as <b>" . $nameHira . "</b> in Hiragana<br><br>";
    } else {
        echo "The name was invalid, or there was some other error.<br><br>";
    }
}
echo "--------------------------- <br><br>";
echo "<b><u>質問3</u></b>　<br><br>";
echo '
<form action="index.php" method="post">
Click "Read data" button to read file Data.vsc got from http://tool.stabucky.com/dummy/ into array or "Download file data" <br><br>
<input type="submit" value="Read data" name="submit1">
</form><br>
<form action="download.php" method="post">
<input type="submit" value="Download file data" name="submit2">
</form><br>
';
if (isset($_POST['submit1'])) {
    include_once('csv_file_loader.php');
    $loader = new CsvFileLoader('data.csv');
    $dem = 0;
    $solan = 0;
    foreach ($loader->getItems() as $item) {
        $dem++;
        echo $dem.'> ';
        foreach ($item as $key => $value) {
            $solan++;
            if ($solan < 5) {
                $space = '--------';
            } else {
                $space = '';
            }
            echo $key. ' => '. $value. $space;
        }
        echo '<br>';
        $solan = 0;
    }
}
echo "--------------------------- <br><br>";
echo "<b><u>質問4</u></b>　<br><br>";
$error = '';
$firstnameKanji = '';
$firstname = '';
$lastnameKanji = '';
$lastname = '';
$gender = '';
function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if (isset($_POST['submit3'])) {
    if (empty($_POST["firstnameKanji"])) {
        $error .= '<p><font color="red">Please Enter your First Name in Kanji</font></p>';
    } else {
        $firstnameKanji = clean_text($_POST["firstnameKanji"]);
        $pattern = '/[\x{4e00}-\x{9faf}]/u';
        if (!preg_match($pattern, $firstnameKanji)) {
            $error .= '<p><font color="red">Only Kanji letters and white space allowed for First Name in Kanji</font></p>';
        }
    }
    if (empty($_POST["firstname"])) {
        $error .= '<p><font color="red">Please Enter your First Name in Hiragana</font></p>';
    } else {
        $firstname = clean_text($_POST["firstname"]);
        $pattern = "/[\x{3041}-\x{3096}]/u";
        if (!preg_match($pattern, $firstname)) {
            $error .= '<p><font color="red">Only Hiragana letters and white space allowed for First Name in Hiragana</font></p>';
        }
    }
    if (empty($_POST["lastnameKanji"])) {
        $error .= '<p><font color="red">Please Enter your Last Name in Kanji</font></p>';
    } else {
        $lastnameKanji = clean_text($_POST["lastnameKanji"]);
        $pattern = '/[\x{4e00}-\x{9faf}]/u';
        if (!preg_match($pattern, $lastnameKanji)) {
            $error .= '<p><font color="red">Only Kanji letters and white space allowed for Last Name in Kanji</font></p>';
        }
    }
    if (empty($_POST["lastname"])) {
        $error .= '<p><font color="red">Please Enter your Last Name in Hiragana</font></p>';
    } else {
        $lastname = clean_text($_POST["lastname"]);
        $pattern = "/[\x{3041}-\x{3096}]/u";
        if (!preg_match($pattern, $lastname)) {
            $error .= '<p><font color="red">Only Hiragana letters and white space allowed for First Name in Hiragana</font></p>';
        }
    }
    $selectGender = $_POST["gender"];
    if ($selectGender == 0) {
        $gender = "男性";
    } else {
        $gender = "女性";
    }

    if ($error == '') {
        $form_data = [0=>$firstnameKanji,1=>$firstname,2=>$lastnameKanji,3=>$lastname,4=>$gender];
        $row = 0;
        //$arrBody = [];
        $arrBody = "";
        $tmpData = $form_data;
        if (($handle = fopen("data.csv", "r")) !== false) {
            while (($data = fgetcsv($handle)) !== false) {
                if ($row == 0) {
                    $arrBody .= implode(",", $data);
                    $arrBody .= " ";
                } else {
                    $arrBody .= implode(",", $tmpData);
                    $arrBody .= " ";
                    $tmpData = $data;
                }
                $row++;
            }
            $countData = count($arrBody);
            $arrBody .= implode(",", $tmpData);
            fclose($handle);
        }

        $pieces = explode(" ", $arrBody);
        $header = explode(",", $pieces[0]);
        $body   = [];
        foreach ($pieces as $k=>$v) {
            if ($k > 0) {
                $body[$k-1] = explode(",", $v);
            }
        }
        $file = fopen('data.csv', 'w');
        fputcsv($file, $header);
        foreach ($body as $row) {
            fputcsv($file, $row);
        }
        fclose($file);

        $error = '<p><b><font color="blue">You just inputted data into Data.csv</font></b></p>';
        $firstnameKanji = '';
        $firstname = '';
        $lastnameKanji = '';
        $lastname = '';
        $gender = '';
    }
}
echo '
<form action="index.php" method="post">
Input data into the following information then click button "Create and Show data" to show data from Data.vsc into array or "Download file data" <br><br>
<b>Warning: Data will be added into the second line of Data.csv file</b><br><br>
'.$error.'
姓(漢字): <input type="text" name="firstnameKanji"><br>
姓(かな): <input type="text" name="firstname"><br>
名(漢字): <input type="text" name="lastnameKanji"><br>
名(かな): <input type="text" name="lastname"><br>
性別: <select name="gender">
  <option value="0">男性</option>
  <option value="1">女性</option>
</select><br><br>
<input type="submit" value="Add data" name="submit3">
<input type="submit" value="Show data" name="submit4">
</form><br>
<form action="download.php" method="post">
<input type="submit" value="Download file data" name="submit5">
</form><br>
';
if (isset($_POST['submit4'])) {
    include_once('csv_file_loader.php');
    $loader = new CsvFileLoader('data.csv');
    $dem = 0;
    $solan = 0;
    foreach ($loader->getItems() as $item) {
        $dem++;
        echo $dem.'> ';
        foreach ($item as $key => $value) {
            $solan++;
            if ($solan < 5) {
                $space = '--------';
            } else {
                $space = '';
            }
            echo $key. ' => '. $value. $space;
        }
        echo '<br>';
        $solan = 0;
    }
}
echo "--------------------------- <br><br>";
echo "<b><u>質問5</u></b>　<br><br>";
echo 'To get data from http://www.jword.jp/business/business_partner_list.htm then add to database<br>
Please click on below button to show data<br><br>
<form action="index.php" method="post">
<input type="submit" value="Get data and Add to Database" name="submit6">
</form><br><br>
Click <a href="http://localhost/~florcita/phpmyadmin/">this link</a> to connect database with following information:<br>
    + Username: <b>root</b><br>
    + Password: <b>Hana4662411</b><br><br>';
if (isset($_POST['submit6'])) {
    include_once('simple_html_dom.php');
    include_once('db.php');
    mb_language('Japanese');
    $html = file_get_html('https://www.jword.jp/business/business_partner_list.htm');
    $items = [];
    $i = 1;
    $firstItem = $html->find('div.BusinessMainContents', 0);
    $showData = "---------------------------<br><br><font color='blue'>";
    foreach ($firstItem->find('table tr') as $item) {
        $itemDetails = $item->find('td', 1)->find('a', 0);
        $itemTitle = mb_convert_encoding($itemDetails->innertext, 'utf8', 'auto');
        $itemUrl = $itemDetails->href;
        $items[] = [
                        'name' => $itemTitle,
                        'url' => $itemUrl
                ];
        $showData .= "リンクテキスト: <b>". $itemTitle. "</b>, リンク先URL: <b>". $itemUrl. "</b><br>";
        $i++;
    }
    $arrData = $items;
    $result=mysqli_insert_array('jword_data', $arrData);
    if ($result['mysql_error']) {
        echo "Query Failed: " . $result['mysql_error'];
    } else {
        echo "<b><font color='red'>You just inputted some datas into Database!</font></b><br> <br />";
    }
    echo $showData.'</font><br>';
}
echo "--------------------------- <br><br>";
echo '
</body>
</html> ';
