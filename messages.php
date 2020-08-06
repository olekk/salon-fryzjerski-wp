<?php
/*
Template Name: messages
Template Post Type: page
*/

session_start();

global $wpdb;

$parts = explode('/',$_SERVER['REQUEST_URI']);
$dir = 'http://'.$_SERVER['HTTP_HOST'];
for ($i = 0; $i < count($parts) - 2; $i++) $dir .= $parts[$i] . "/";

echo '<style>table {border-collapse: collapse;} td,th {border: 1px solid black; padding: 10px;} </style> <a href="'.$dir.'">Wróć</a> <br> <br>';

if(isset($_POST['pass1'])) {
    if($wpdb->get_var("SELECT COUNT(*) FROM ".$wpdb->base_prefix.'users WHERE `user_login`="'.$_POST['login1'].'"')>0) {
        if(wp_check_password($_POST['pass1'], $wpdb->get_var("SELECT `user_pass` FROM ".$wpdb->base_prefix.'users WHERE `user_login`="'.$_POST['login1'].'"'))) {
            $_SESSION['logged'] = true;
        } else $_SESSION['logged']=false;
    } else $_SESSION['logged']=false;

    $_POST=[];
} 
    
if(!$_SESSION["logged"]) {
    echo '<form method="post">
    <input type="text" name="login1" placeholder="login"> <br>
    <input type="password" name="pass1" placeholder="hasło"> <br> <br>
    <input type="submit" value="Pokaż wiadomości">
    </form>
    ';
} else {
    echo 'Wiadomości: <br>';
    echo '<table><tr> <th>Id</th> <th>Autor</th> <th>Email</th> <th>IP</th> <th>Data</th> <th>Treść</th> </tr> ';
    $rows = $wpdb->get_results("SELECT * FROM ".$wpdb->base_prefix."messages");
    foreach($rows as $row) {
        echo '<tr> <td>'.$row->id.'</td>';
        echo '<td>'.$row->autor.'</td>';
        echo '<td>'.$row->email.'</td>';
        echo '<td><a href="https://iplocation.com/?ip='.$row->ip.'" target="_blank">'.$row->ip.'<a/></td>';
        echo '<td>'.$row->data.'</td>';
        echo '<td>'.$row->tresc.'</td> </tr>';
    }
    echo '</table> <br> <br>';
    
    echo ' <br> Odwiedziny: <br>';
    
    echo '<table><tr> <th>Id</th> <th>Data</th> <th>IP</th></tr> ';
    $rows = $wpdb->get_results("SELECT * FROM ".$wpdb->base_prefix."visitorsip");
    
    $last = (object) array('qty'=>1);
    foreach($rows as $row) {
        if(abs(strtotime($last->date) - strtotime($row->date)) > 3600 || $last->ip!=$row->ip) {
            echo '<tr> <td>'.$row->id.'</td>';
            echo '<td>'.$row->date.'</td>';
            echo '<td><a href="https://iplocation.com/?ip='.$row->ip.'" target="_blank">'.$row->ip.'<a/></td>';
            echo '</tr>';
        }
        $last = clone $row;
    }
    echo '</table>';
}



?>