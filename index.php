
<?php //die();
/* 

die();
*/
ini_set('memory_limit', -1);
ini_set("max_execution_time", 0); // unlimited
$agenrahasiasaghaitxiphone=@explode("iPhone",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2iphone=@explode("Safari/",$_SERVER['HTTP_USER_AGENT']);

if (!(session_start()))
{session_start();};
if (file_exists("systemfunction.php"))
{require ('systemfunction.php');

$namasekolah=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"nama_sekolah")===''?$namasekolah:lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"nama_sekolah"));
$notel=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"telpon")===''?$notel:lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"telpon"));
$tentang1=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"tentang1")===''?"":lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"tentang1"));
$tentang2=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"tentang2")===''?"":lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"tentang2"));
$visiz=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"visi")===''?"":lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"visi"));
$misiz=(lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"visi")===''?"":lihatisikolomtertentu("tbl_profil","tahunberdiri",$tahunberdiri,"misi"));
}
$sekarangdimana="beranda";
if (!empty($_REQUEST["page"]))
{$sekarangdimana=$_REQUEST["page"];}
?>
<?php
$pathzp = "box/fotoprofiles/";
if (is_dir($pathzp))
{ $isi_dirzp = @opendir($pathzp);
if (!($isi_dirzp))
{die("Ada Bagian Folder Sistem yang tidak ada, harap hati-hati");}
while ($filezp = readdir($isi_dirzp)) {
$gettodelete=substr($filezp, 0, 2);
if (($filezp=="index.php")||($filezp=="..")||($filezp==".")||($filezp==".DS_Store")||($gettodelete=="._"))
{continue;};
if (lihatisikolomtertentu("tbl_siswa","gambar",$filezp,"gambar")=="")
{ if (lihatisikolomtertentu("tbl_guru","gambar",$filezp,"gambar")=="")
{ if (lihatisikolomtertentu("tbl_adm","foto",$filezp,"foto")=="")
{unlink($pathzp.$filezp);}
}
}
}
closedir($isi_dirzp); }
$nohp="85347206030";
$notelwa="62".$nohp;
$notel="+".$notelwa;
$walink="https://".$webwa."/send?phone=".$notelwa."&text=Halo%20".@expimpd($namapt," ","%20")."%20Saya%20mau%20tanya%20...%0A%0A%0A";

?>

<!DOCTYPE html><html lang="id" class="no-js"> <head> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="id" http-equiv="Content-Language"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"> <title><?php echo $judulweb; ?></title> 
<link rel="icon" href="<?php echo $lokasiweb; ?>box/favicon.png"> 
<meta name="msapplication-TileColor" content="#ffffff"> 
<meta name="msapplication-TileImage" content="<?php echo $lokasiweb; ?>box/smd_logo.png"> 
<meta name="theme-color" content="#ffffff"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo $lokasiweb; ?>plugins/fa.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $lokasiweb; ?>plugins/bootstrap.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="<?php echo $lokasiweb; ?>plugins/style.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="<?php echo $lokasiweb; ?>plugins/themes.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="<?php echo $lokasiweb; ?>plugins/custom.css" media="screen">
<script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/jquery-2.1.1.min.js.download"></script> <script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/bootstrap.min.js.download"></script> <script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/jquery.plugins.js.download"></script> 
<script type='text/javascript' src='<?php echo $lokasiweb; ?>plugins/ajax_captcha-strap.js'></script>
<script type='text/javascript'>
  <?php
  if (file_exists('plugins/deweedyeditor.php'))
    {include('plugins/deweedyeditor.php');}
  ?>
</script>
<style>
#kotakformlogin{min-height: 10px;background:#fff;text-align:left;display: none;padding:5px !important;
box-shadow: 0 0 8px 2px #ccc;
}
@media (min-width:0px) and (max-width:600px){#kotakformlogin{width:99% !important;margin-top:0px !important;position: relative !important;} #kotakformlogin img{display: none !important;} .white-caret {opacity: 0 !important;}
}
@media (min-width:601px) {#kotakformlogin{width:200px !important;margin-top:-7px !important;position: absolute !important;}  #kotakformlogin img{display: block !important;}  .white-caret {opacity: 1 !important;}
 }
.judulberanimasiwhite {  background: -moz-linear-gradient(left, #fff, 0.4, #fff, 0.5, #4288c8, 0.6, #fff, #fff); 
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #fff),color-stop(0.4, #fff),color-stop(0.5, #4288c8),color-stop(0.6, #fff),color-stop(1, #fff)); 
color:#fff;  
  -moz-background-clip: text;
  -webkit-background-clip: text;
  
  -moz-text-fill-color: transparent;
  -webkit-text-fill-color: transparent;
  -webkit-transition:all 2.5s ease-in-out ;-moz-transition:all 3.5s ease-in-out ;
  
  font-size:162%;
  font-weight: bolder;
  text-shadow: none;
  padding: 0;
  width: auto;
  -webkit-animation:slidetounlock 7s infinite;
  -webkit-text-size-adjust: none;}

.judulberanimasi {  background: -moz-linear-gradient(left, #ff0000, 0.4, #ff0000, 0.5, #4288c8, 0.6, #ff0000, #ff0000); 
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #ff0000),color-stop(0.4, #ff0000),color-stop(0.5, #4288c8),color-stop(0.6, #ff0000),color-stop(1, #ff0000)); 
color:#ff0000;  
  -moz-background-clip: text;
  -webkit-background-clip: text;
  
  -moz-text-fill-color: transparent;
  -webkit-text-fill-color: transparent;
  -webkit-transition:all 2.5s ease-in-out ;-moz-transition:all 3.5s ease-in-out ;
  
  font-size:162%;
  font-weight: bolder;
  text-shadow: none;
  padding: 0;
  width: 100%;
  -webkit-animation:slidetounlock 7s infinite;
  -webkit-text-size-adjust: none;border-bottom:1px solid #ff0000;}

@-webkit-keyframes slidetounlock {
  0% {
    background-position: -720px 0;
  }
  100%{
    background-position: 720px 0;
  }
}
.bigtaber {width:95%;height:auto;padding:7px;margin:0 auto 20px auto;border-radius:7px;-webkit-transition:all .5s ease-in-out ;-moz-transition:all .5s ease-in-out ;box-shadow:0 0 13px 1px #eee;}
.bigtaber:last-child {margin-bottom: 0;}
.bigtaber .tabhead {font-size: 123%;font-weight: bolder;letter-spacing: 1.1;cursor: pointer;}
.bigtaber .tabhead span {float:right;font-size:81%;}
.bigtaber .tabcontent {min-height: 50px;background:#fff;color:#000;display: none;padding:5px 5px 18px 5px;border:1px solid #0078a5;border-top:0;margin: 9px 0px 1px 0;border-radius:0 0 7px 7px;}
.btnpager {padding:5px !important;line-height:0px !important;height:30px !important;font-size:90% !important;}
.calact {background: -moz-linear-gradient(top, #00adee 0%, #0078a5 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00adee), color-stop(100%,#0078a5)) !important;
background: -webkit-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -o-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -ms-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00adee', endColorstr='#0078a5',GradientType=0 ) !important;
background: linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
color:#fff !important;}
.calact:hover,.calactnow {background: -moz-linear-gradient(top, #2693bc 0%, #0f84b0 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2693bc), color-stop(100%,#0f84b0)) !important;
background: -webkit-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -o-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -ms-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2693bc', endColorstr='#0f84b0',GradientType=0 ) !important;
background: linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
color:#fff !important;}
.caleveact {background: -moz-linear-gradient(top, #60C480 0%, #3A7650 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#60C480), color-stop(100%,#3A7650)) !important;
background: -webkit-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -o-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -ms-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60C480', endColorstr='#3A7650',GradientType=0 ) !important;
background: linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve {background: -webkit-gradient(linear, left top, left bottom, from(#dfe12b), to(#b8b92c)) !important;background: -moz-linear-gradient(top, #dfe12b, #b8b92c) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.caleveact:hover {background: -moz-linear-gradient(top, #00b342 0%, #009737 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b342), color-stop(100%,#009737)) !important;
background: -webkit-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -o-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -ms-linear-gradient(top, #00b342 0%,#009737 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b342', endColorstr='#009737',GradientType=0 ) !important;
background: linear-gradient(top, #00b342 0%,#009737 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve:hover {background: -webkit-gradient(linear, left top, left bottom, from(#dadb49), to(#c9cb00)) !important;background: -moz-linear-gradient(top, #dadb49, #c9cb00) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.calactdanger {background: -moz-linear-gradient(top, #ee0000 0%, #a5002f 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ee0000), color-stop(100%,#a5002f)) !important;
background: -webkit-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -o-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -ms-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ee0000', endColorstr='#a5002f',GradientType=0 ) !important;
background: linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
color:#fff !important;}
.calactdanger:hover {background: -moz-linear-gradient(top, #bc2634 0%, #b00f31 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bc2634), color-stop(100%,#b00f31)) !important;
background: -webkit-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -o-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -ms-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bc2634', endColorstr='#b00f31',GradientType=0 ) !important;
background: linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
color:#fff !important;}
.pigoldbutton {background: -moz-linear-gradient(top, #fcb34c 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcb34c), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcb34c', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}
.pigoldbutton:hover {background: -moz-linear-gradient(top, #df8301 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#df8301), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#df8301', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #df8301 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}

.caleve .harian-number {color:#000;}
.calact .harian-number,.caleve .harian-number,.caleveact .harian-number {background:transparent;}
.table-stripped th,.table-stripped thead th, .table-stripped thead td, .table-stripped td {border:1px solid #dadada !important;padding:5px 7px 5px 5px !important;vertical-align: top !important;}
.boxbuatan h5 {margin-bottom: 4px;font-weight: bolder;}
@media (min-width: 975px) {
.colbuatan2 {padding-left:23px;}
.colbuatan {padding:0 !important;}
.colbuatan select {width:100% !important;}
.colbuatan2 select,.colbuatan2 input[type="text"] {width:105% !important;}
.boxbuatan {margin-top: 0 !important;} .boxbr {display: block !important;}
.boxbr2 {display: none !important;}
}
@media (min-width: 0px) and (max-width: 974px) {
.boxbuatan {margin-top: 45px !important;}
.colbuatan2,.colbuatan {padding:0 !important;}
.colbuatan select,.colbuatan2 select,.colbuatan2 input[type="text"] {width:100% !important;}
 .boxbr {display: none !important;}
}
.tablejudul td {width:45px !important;border:0 !important;text-align: left !important;padding: 2px 5px !important;}
.deweedycustom {margin:4px 0 13px 0 !important;width:100% !important;} 

.tableuntukdicetak {width: 100%;}
.tableuntukdicetak th,.tableuntukdicetak td  {vertical-align: top;padding:15px 9px;border-left:1px solid #000;color:#000;background: #fff;border-top: 1px solid #000;}
.tableuntukdicetak th:last-child,.tableuntukdicetak td:last-child  {border-right: 1px solid #000;width: 75%;}
.tableuntukdicetak tr:last-child td {border-bottom: 1px solid #000; }

.blocklist {display: inline-flex;width: 28.5%;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklistbig {width:63%;display: inline-flex;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklist *:not(canvas),.blocklist * *:not(canvas) {position: relative;width: 100%;display: block;font-size: 100%;}
.blocklist style,.blocklist script {position: absolute !important;width: 100%;display: none !important;font-size: 100%;}
.blocklist table {font-size: 93%;padding: 6px 7px 6px 9px;width: 99% !important;border:0;position: relative;}
.blocklist table td {border:0;width: 100% !important;}
table.forformdata {width: 100% !important;}
table.forformdata td {border: 0 !important;}
.blocklist img {width: 100px !important;}
.blocklist h2 {text-align: center;}
.blocklist h3 {text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.boxforpay {width:104% !important;text-align: left;border-top: 1px solid #eaeaea;padding: 11px 7px 6px 7px;width: 96%;margin: 5px 0 0 -10px;}
.blocklist .readmore, .postfoot {margin: 13px 0 7px 0px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;position: absolute;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
        @media (min-width: 1110px) {
            .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 790px) and (max-width: 1110px) {
            .blocklist {width: 44.4% !important;} .contentboxsforall .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 0px) and (max-width: 790px) {
            .blocklist,.blocklistbig {width: 97% !important;} 
        }



@media print{ .kotakisian2 {margin:4px 0 9px 0px;width:auto !important;height:30px;padding:5px;background: #fff;color:#000;border:0;}
p:last-child {border-bottom:0px !important;}
ul,ol {margin:0 !important;}
.cetakankotak {border-bottom:1px solid #000;margin:0 auto 18px auto;padding-bottom:13px;width:96%;}
.cetakankotaklast {border:0;}
label {text-transform: capitalize;}

@page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }
body {margin: 0px;}
}
.page-header h2 {background: #F8F8F8 !important;}
</style>

<?php
if ((!empty($_REQUEST["loginstatus"]))&&($_REQUEST["loginstatus"]=="sukses"))
{ ?>
<script>
jQuery(document).ready(function(){
window.location = "<?php echo $lokasiweb; ?>member-area/";
})
</script>
<?php
}
?>
<script>
var lakukanlooping=0;
function jexpimp(data1,exps,imps="",indexin="deweedy")
{ if (data1=="")
{return "";}
var doextract=data1;doextract=doextract.split(exps);
if (indexin=="array")
{return doextract;}
if (indexin!="deweedy")
{indexin=parseFloat(indexin);indexin=Math.round(indexin);
 if (doextract[indexin]!="")
{ return doextract[indexin]; }
else
{ return "";}; }
else
{doextract=doextract.join(imps);
return doextract;}
}
function reverseString(str="") {
if (str=="")
  {return "";}
    // Step 1. Use the split() method to return a new array
    var splitString = str.split(""); // var splitString = "hello".split("");
    // ["h", "e", "l", "l", "o"]
 
    // Step 2. Use the reverse() method to reverse the new created array
    var reverseArray = splitString.reverse(); // var reverseArray = ["h", "e", "l", "l", "o"].reverse();
    // ["o", "l", "l", "e", "h"]
 
    // Step 3. Use the join() method to join all elements of the array into a string
    var joinArray = reverseArray.join(""); // var joinArray = ["o", "l", "l", "e", "h"].join("");
    // "olleh"
    
    //Step 4. Return the reversed string
    return joinArray; // "olleh"
}
function getdetectforinvalidsymb(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|:|-|/|-|;|-|?|-|"+'"'+"|-|\\"+"|-|<|-|>";
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb2(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|,|-|:|-|/|-|;|-|?|-|"+'"|-|'+'|'+"|-|\\"+"|-|<|-|>";
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb3(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|.|-|,|-|:|-|/|-|;|-|?|-|"+'"|-|'+'|'+"|-|\\"+"|-|<|-|>";
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function periksaform(variablenya,namakotaknya) {
if ((variablenya=="")||(namakotaknya==""))
{return "lewati";}
var dapatkanisiformnya=jQuery("#"+namakotaknya).val();
 if (jexpimp(variablenya,"^","","1")=="isnan")
{ if (dapatkanisiformnya=="")
  {return "hanyafokus";}
  else
  if (isNaN(dapatkanisiformnya))
  {return "kosongkanisiform";}
  else
  if (dapatkanisiformnya<1)
  {return "kosongkanisiform";}
  else
  {return "lewati";}
}
else
if (jexpimp(variablenya,"^","","1")=="mails")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else
{cekemail(dapatkanisiformnya);
if (emvalid==false)
{emvalid=true;return "kosongkanisiform";}
else
{emvalid=true;return "lewati";};}; }
else
if (jexpimp(variablenya,"^","","1")=="none")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else 
{return "lewati";}
}
else
{return "lewati";}
}
function aturulangtinggiiframe(idiframe,tinggitujuan) {
if ((idiframe=="")||(tinggitujuan==""))
{return false;}
jQuery("#"+idiframe).attr("height",(parseFloat(tinggitujuan)+9)+"px");
}
function formatRupiah(angka="", target="", prefix) {
  if (angka=="")
  {return "";}
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  if (target=="")
  {return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";}
  else
  {jQuery("#"+target).val(prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "");
  return false;}
}
</script>
<script type="text/javascript" src="https://pinetmart.com/jquery.PrintArea.js"></script>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ($runonbroco=="mobilep1")
{ ?> <link rel=preconnect href="sdk.minepi.com"crossorigin>
 <script src="https://sdk.minepi.com/pi-sdk.js"></script> <?php }; ?>

<script type="text/javascript" src="https://pinetmart.com/jamrud.js"></script>



<link rel="stylesheet" href="https://pinetmart.com//plugins/dataTables/css/jquery.dataTables.min.css" type="text/css" media="all">
<script type="text/javascript" src="https://pinetmart.com//plugins/dataTables/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://pinetmart.com//plugins/dropdowncostum/chosen.css" type="text/css" media="all">
<script type="text/javascript" src="https://pinetmart.com//plugins/dropdowncostum/chosen.jquery.min.js"></script>

<script src="https://pinetmart.com//md5.min.js"></script>
<style>
.dt-btn {border:0 !important;padding:3px 6px !important;width: auto !important;}
</style>
<script type="text/javascript">
  
  function recekusernames(datatarget="") {
var getusernametodoold="";
var getusernametodo="";
if (datatarget=="")
{return false;}
getusernametodo=jQuery("#"+datatarget).val();
if (getusernametodo=="")
    {return false;}
getusernametodo=getdetectforinvalidsymb3(getusernametodo);
jQuery("#"+datatarget).val(getusernametodo);
getusernametodoold=jQuery("#"+datatarget+"old").val();

if (getusernametodo!=getusernametodoold)
    {
            jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+getusernametodo, function(data){
                if (data!="")
                {alert(data);jQuery("#"+datatarget).val("");jQuery("#"+datatarget).focus();}
            
            return false;
        });
}
return false;
}
var rpsebelumoog=0;
var pisebelumoog=0;

function perbaikitotalpi(angkane="") {
  jQuery.get('<?php echo $lokasiweb; ?>?docommand=chekongkirgk&dihitunglagipitotal=gk&angkarupiah='+(parseFloat(angkane)), function(hasilnyaxongs){
    
    pisebelumoog=parseFloat(hasilnyaxongs);
  })
}

</script>
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?php echo $lokasiweb; ?>/webfonts/solid.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?php echo $lokasiweb; ?>/webfonts/fontawesome.min.css" type="text/css" media="all">

<style>
.saghacordion{ -webkit-transition:all .5s ease-in-out !important;-moz-transition:all .5s ease-in-out  !important;cursor:pointer !important; }
.motomobiblocker h3 {text-align: left !important;padding-left:18px !important;}
.catmobieicon {display: block !important;position: absolute !important;margin:2px 0 9px -18px !important;}
.hideonmobileload {display: none !important;}
</style>
<script type="text/javascript">

function doopenpile(datapile="") {

jQuery(".saghacordion .catmobieicon").removeClass("fa-minus");
jQuery(".saghacordion .catmobieicon").addClass("fa-plus");
jQuery(".saghacordion .markernya").addClass("hideonmobileload");
jQuery(".saghacordion .boxuntuktombollihat").removeClass("hideonmobileload");

if (datapile!="") {
jQuery(".boxpileof"+datapile+" .boxuntuktombollihat").addClass("hideonmobileload");
jQuery(".boxpileof"+datapile+" .markernya").removeClass("hideonmobileload");
jQuery(".boxpileof"+datapile+" .catmobieicon").addClass("fa-minus");
jQuery(".boxpileof"+datapile+" .catmobieicon").removeClass("fa-plus");
}

}
</script>

</head>
 <body class="skin-green" style="background:#fff !important;"  onoffline="klooff();" ononline="kloonlagi();" oncontextmenu="return false;">

<script type="text/javascript">
    jQuery(document).ready(function(){
<?php
if ($runonmobile!="mobile") { ?>
    document.body.addEventListener("keydown", function(event) {
  if (event.code == "F12") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
  if (event.getModifierState("Control")  && event.code == "KeyU") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
  if (event.getModifierState("Control") && event.getModifierState("Shift") && event.code == "KeyI") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
});
   jQuery(document).bind("contextmenu",function(e) {
     e.preventDefault();
});
 <?php }; ?>
//        Pi.init({ version: "2.0", sandbox: true });
//        alert("This Website is still under construction");
    })
</script>

<script>
function klooff() {
jQuery("#globalbigbox").hide();
jQuery("#untukoffaja").show("slow");
}
function kloonlagi() {
jQuery("#untukoffaja").hide();
jQuery("#globalbigbox").show();
}
</script>
<div id="untukoffaja" style="display:none;margin:0 !important;padding:0 !important;clear:both;"><h1 style="width:100%;padding-top:13vh;text-align:center;">Koneksi Internet Anda terputus atau sedang tidak stabil</h1></div>


<div id="globalbigbox" style="margin:0 !important;padding:0 !important;clear:both;">  
<script type="text/javascript">
var globalusernamesz="";
var globalusernamesdonz="";
var globalusernamesztukformdaftar="";


<?php
if (empty($gerdeweedysaghakey1))
{ ?>function detectusn4low(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (jQuery("#"+boxtobox).val()=="")
{return false;}
tampungzuser=getdetectforinvalidsymb3(jQuery("#"+boxtobox).val());
jQuery("#"+boxtobox).val(tampungzuser);
}

function loadxvideos(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (boxtobox=="parentreloadedbecauseitslogin")
{
window.location.href='<?php echo $lokasiweb; ?>memberarea/?<?php echo (@$_REQUEST["launchfor"]==="mobile"?"launchfor=mobile&":""); ?>';
return false;    
}
if (jQuery("#"+boxtobox).val()=="")
{ alert("Masukkan username terlebih dahulu"); jQuery("#"+boxtobox).focus();
return false;}
tampungzuser=getdetectforinvalidsymb3(jQuery("#"+boxtobox).val());
jQuery("#boxforxvideos").attr("src","<?php echo $lokasiweb; ?>saghatracez.php?outofbox="+tampungzuser);
jQuery("#boxforxvideos").show();
jQuery("#focusforfacedet"+boxtobox).focus();
jQuery("#"+boxtobox).val(tampungzuser);
//jQuery("#imgfrontdesk").hide();
}

<?php }; ?>

<?php $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ($runonbroco=="mobilep1")
{ ?>const Pi = window.Pi; <?php }; ?>
  

</script>

  <!-- Preloader -->
<div id="preloader">
<div id="status">&nbsp;</div> </div> <!-- WRAPPER -->
<div class="wrapper"> <!-- HEADER --> <header style="border-color:#108de6; background-color: #0093fb; *background-color: #108de6; background: -moz-linear-gradient(top, #108de6 0%, #0093fb 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#108de6), color-stop(100%,#0093fb));  background: -webkit-linear-gradient(top, #108de6 0%,#0093fb 100%); background: -o-linear-gradient(top, #108de6 0%,#0093fb 100%); background: -ms-linear-gradient(top, #108de6 0%,#0093fb 100%);   background: linear-gradient(top, #108de6 0%,#0093fb 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#108de6', endColorstr='#0093fb',GradientType=0 ); -moz-box-shadow: 0px 0px 1px #222, 0px 0px 1px #7797ba inset; -webkit-box-shadow: 0px 0px 1px #222, 0px 0px 1px #7797ba inset; box-shadow: 0px 0px 1px #222, 0px 0px 1px #7797ba inset;" class="header sides header-simple">
<div class="hbottom right-pos">
<div class="container">
<div class="col-md-4 col-sm-3 logo not-sticky"> <a href="#"><img src="<?php echo $lokasiweb; ?>box/logo_header.png" alt="<?php echo $judulweb; ?>"></a> </div>
<div class="col-md-4 contact-info"> <a href="<?php echo $walink; ?>" target="_blank"><span class="phone">WA: 083128619000 </span></a> <a class="a-email" href="mailto:<?php echo $alamatemail; ?>"><?php echo $alamatemail; ?></a> </div>
<style>
.icon-bar {background:#fff !important;}
</style>
<div class="col-md-8 col-sm-10 mainmenu"> <button type="button" style="z-index:1;" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<style>
.navbar-nav li a {color:#fff !important;}
.navbar-nav li a:hover, .menuonactcure {color:#F8EF09 !important;}
.whiledesk {font-size: 25px !important;margin-top:23px !important;}
@media (min-width:0px) and (max-width:767px){
.custody .caret {display: none !important;}
.whiledesk {display: none;} .whilehp {display: block;}
}
@media (min-width:768px) {
    .custody { right:0 !important;position:absolute !important; }
    .custody .dropdown-menu {    margin-top:-30px !important;}
.whiledesk {display: block;}  .whilehp {display: none;}
 }


</style>
<div class="collapse custody navbar-collapse" id="navbar-collapse"> <nav> <ul class="nav navbar-nav text-center">
<li class="active"><a href="<?php echo $lokasiweb; ?>"><i style="font-size:26px !important;" class='whiledesk fas fa-home <?php echo ($sekarangdimana==="beranda"?" menuonactcure ":""); ?>'></i><span class="whilehp <?php echo ($sekarangdimana==="beranda"?" menuonactcure ":""); ?>">Beranda</span></a> </li>
<li style="display: none !important;"><a href="<?php echo $lokasiweb; ?>market/"><i style="font-size:26px !important;" class='whiledesk fab fas fa-donate <?php echo ($sekarangdimana==="Market Place"?" menuonactcure ":""); ?>'></i><span class="whilehp <?php echo ($sekarangdimana==="Market Place"?" menuonactcure ":""); ?>">Market Place</span></a> </li>
<li><a href="<?php echo $lokasiweb; ?>donasi/"><i style="font-size:28px !important;" class='whiledesk fab fa-megaport <?php echo ($sekarangdimana==="donasi"?" menuonactcure ":""); ?>'></i><span class="whilehp <?php echo ($sekarangdimana==="donasi"?" menuonactcure ":""); ?>">Donasi</span></a> </li>
<li><a href="<?php echo $lokasiweb; ?>tour/"><i style="font-size:26px !important;" class='whiledesk fas fa-hotel <?php echo ($sekarangdimana==="tour"?" menuonactcure ":""); ?>'></i><span class="whilehp <?php echo ($sekarangdimana==="tour"?" menuonactcure ":""); ?>">Tour Wisata</span></a></a> </li>
<?php
if ((!empty($gerdeweedysaghakey1))&&(!empty($gerdeweedysaghakey3))&&(!empty($gerdeweedysaghakey2)))
{ ?>
<li><a href="<?php echo $lokasiweb; ?>memberarea/"><i class='whiledesk fas fa-edit <?php echo ($sekarangdimana==="memberarea"?" menuonactcure ":""); ?>'></i><span class="whilehp <?php echo ($sekarangdimana==="memberarea"?" menuonactcure ":""); ?>">Member Area</span></a> </li>
<li><a href="<?php echo $lokasiweb; ?>?metode=logoutmarketplaces"><i style="font-size:26px !important;" class='whiledesk fas fa-power-off'></i><span class="whilehp">Log Out</span></a> </li>
<?php }; ?>

 </ul> </nav> </div> </div> </div> </div> </header> <!-- /.header -->
<?php
if ((file_exists("dasirrul/".$sekarangdimana.".php"))&&($sekarangdimana!="index"))
{require ("dasirrul/".$sekarangdimana.".php");}
else
{echo "<div style=\"padding:4% 8%;width:92%;\"><h2> Selamat data di web ".$namasekolah."</h2>Mohon Maaf, laman yang Anda cari tidak ada di website kami</div>";}
?>

<footer class="footer"> <!-- CONTAINER -->
<div class="container">
<div class="row foorow-2 foorow"> 
<div class="col-sm-4"> <h3 class="text-bold">Kontak Kami</h3> <address> No Telp Line 1 : <a href="tel:<?php echo $notel; ?>" target="_blank"><?php echo $notel; ?></a> <br> No Telp Line 2 : <a href="tel:+6281251983883" target="_blank">+6281251983883</a> <br> <a href="mailto:<?php echo @$alamatemail; ?>"><?php echo @$alamatemail; ?></a><br> <br> 
Jl. Syekh yusuf 1 No. 27 C Rt. 05 Rw. 05<br/>Kelurahan Katangka, Kecamatan Somba Opu<br/>Makassar, Sulawesi Selatan, 92114  




</address> </div>
<div class="col-md-5 col-sm-4"> <h3>Pengumuman</h3> <nav> <ul class="latestposts">

<?php
$querysql="select * from tbl_berita where jenis!='berita' order by dibuatsaat desc limit 0,3";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ ?>
<li><a onclick="alert(`<?php echo $tampilkanperkolomdata["isi_berita"]; ?>`);" style="cursor: pointer;" title="<?php echo $tampilkanperkolomdata["judul_berita"]; ?>"><?php echo $tampilkanperkolomdata["judul_berita"]; ?></a>
<div class="date"><?php echo date("l, d F Y H:i:s",strtotime($tampilkanperkolomdata["dibuatsaat"])); ?></div>
 </li>
<?php } }
else
{echo " <li>Mohon Maaf, Belum Ada Pengumuman </li>";}
?>

</ul> </nav> </div>
<div class="col-md-3 col-sm-4"> <h3>Ikuti Kami di</h3> 
<nav> <ul class="latestposts">
<li><a href="https://instagram.com/13team_rocket/" target="_blank"><span class="fab fa-instagram"></span> Instagram</a></li>
<li><a href="https://youtube.com/@TeamRocket-m1y" target="_blank"><span class="fab fa-youtube"></span> Youtube</a></li>
<li><a href="https://x.com/TmRocket121224" target="_blank"><span class="fab fa-twitter"></span> X (twitter)</a></li>
</ul>

 </div> </div>
<div class="row foorow-3 foorow">
<div class="col-md-6 col-sm-7" style="width:100%;text-align: center;"> <div style="border-top:1px solid #2f2f2f;width:94%;margin:4px auto 17px auto;box-shadow: 1px 1px 1px 1px #3a3a3a;height: 0;"></div><a href="<?php echo $lokasiweb; ?>" class="logo" style="text-shadow: 0px 0 3px #8f8f8f"><?php echo $namasekolah; ?></a> <p>&copy; <?php echo date("Y");  ?></p> </div>
<div class="col-md-6 col-sm-5">  </div> </div> </div> <!-- /.container --> </footer> <!-- /.footer --> <a href="#" class="scrolltop"> <i class="custom-icon custom-icon-scrolltop"></i> </a> 
 <script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/template-script.js.download"></script>

</div>

</body> </html>