<?php
if (empty($namawebsite))
{die();}

?>

<?php 
if($runonmobile=="mobile")
{ 
?>
<script type="text/javascript">
function windofchange(modie="")
{
jQuery(".the7-e-tab-content").removeClass("active");
jQuery(".the7-e-tab-content").attr("style","");
jQuery(".the7-e-tab-title").removeClass("active");
jQuery("#the7-e-tab-title-324"+modie).addClass("active");
jQuery("#the7-e-tab-content-324"+modie).addClass("active");
jQuery("#the7-e-tab-content-324"+modie).attr("style","display:block;");

}
</script>
<style>
.box-description ul li {list-style: circle !important;}
</style>
<?php
}
else
{ ?>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">About Us</h2>
<br/><br/>
 <?php }; ?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;<?php echo @(@$runonmobile==="mobile"?"margin-left: -18px !important;":""); ?>" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container">
<div class="the7-e-tabs-wrapper">
<div class="the7-e-tabs-nav-wrapper">
<div class="the7-e-tabs-nav-scroll-wrapper">
<div class="the7-e-tabs-nav" role="tablist">
<span class="item-divider" aria-hidden="true"></span>
<div <?php echo @(@$runonmobile==="mobile"?"onclick=\"windofchange('1');\"":""); ?> id="the7-e-tab-title-3241" class="the7-e-tab-title active" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="the7-e-tab-content-3241" aria-expanded="true">
<h5 class="the7-e-tab-title-text">
Who We Are </h5>
</div>
<span class="item-divider" aria-hidden="true"></span>
<div <?php echo @(@$runonmobile==="mobile"?"onclick=\"windofchange('2');\"":""); ?> id="the7-e-tab-title-3242" class="the7-e-tab-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="the7-e-tab-content-3242" aria-expanded="false">
<h5 class="the7-e-tab-title-text">
Vision Mission </h5>
</div>
<span class="item-divider" aria-hidden="true"></span>
<div <?php echo @(@$runonmobile==="mobile"?"onclick=\"windofchange('3');\"":""); ?> id="the7-e-tab-title-3243" class="the7-e-tab-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="the7-e-tab-content-3243" aria-expanded="false">
<h5 class="the7-e-tab-title-text">
Pi Coin Calculator </h5>
</div>
<span class="item-divider" aria-hidden="true"></span>
</div>
</div>
<div class="the7-e-tab-nav-button left-button"></div>
<div class="the7-e-tab-nav-button right-button"></div>
</div>
<div class="the7-e-tabs-content" role="tablist" aria-orientation="vertical">
<span class="item-divider" aria-hidden="true"></span>
<div class="the7-e-tab-item-wrapper" data-tab="1">
<div class="the7-e-tab-title active" aria-selected="true" data-tab="1" role="tab" tabindex="0" aria-controls="elementor-tab-content-3241" aria-expanded="true">
<h5 class="the7-e-tab-title-text">
Who We Are </h5>
</div>
<div id="the7-e-tab-content-3241" class="the7-e-tab-content active" data-tab="1" role="tabpanel" aria-labelledby="the7-e-tab-title-3241" tabindex="0" style="display: block;"> <div class="elementor-template">
<div data-elementor-type="section" data-elementor-id="9596" class="elementor elementor-9596">
<section style="text-align:justify !important;" class="elementor-section elementor-top-section elementor-element elementor-element-480b245 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="480b245" data-element_type="section">
<div class="elementor-container elementor-column-gap-wide">

<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-88b8b9d" data-id="88b8b9d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-e1dd31c elementor-widget elementor-widget-text-editor" data-id="e1dd31c" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div style="width:74vw !important;min-height: 10px;">
<p><?php echo $foraboutdesc; ?>.</p>

<style>
#imageSec{
	padding:25px 10px; 
	margin-top:50px;
	transition-duration: 1ms;
	}
.rotateBtn {
	padding: 5px 10px;
	background-color: #D83333;
	border: 0;
	color: #FFF;
	cursor: pointer;
	}
</style>

<p style="text-align: center !important;"><img src="<?php echo $lokasiweb; ?>logoAI.png" id="imageSec" /><br/>
<input type="button" class="rotateBtn" id="spinagain" value="Spin Again" onClick="lakukanputarannya();" style="display: none;" />
<input type="button" class="rotateBtn" id="stopspins" value="Stop Spin" onClick="lakukanputarannya('stop');" style="display: none;" />
</p>
<script>
	var putarandetik=1;
function RotateImageMethod(degree) {
if (putarandetik>0)
{	jQuery('#imageSec').animate({  transform: degree }, 
	{
    step: function(now,fx) 
    {
        jQuery(this).css({
            '-webkit-transform':'rotate('+now+'deg)',
            '-moz-transform':'rotate('+now+'deg)',
            'transform':'rotate('+now+'deg)'
        });
    }
    });
setTimeout("RotateImageMethod(360)", putarandetik); }
else
{}
return false;
}
function lakukanputarannya(stopnow="") {
	if (stopnow=="stop") {
putarandetik=0;
jQuery("#stopspins").hide();
jQuery("#spinagain").show();
return false;
}
else
{
putarandetik=1;
jQuery("#spinagain").hide();
jQuery("#stopspins").show();

setTimeout("RotateImageMethod(360)", putarandetik);
}
}
jQuery(document).ready(function() {
	lakukanputarannya();
})
</script>


<p><b>PT <?php echo $namapt; ?></b> saat ini berlokasi di <?php echo $alamat; ?>.</p>
<p><b style="font-size:160% !important;">Untuk menjadi member indo PiNet mart tidak dipungut biaya.</b><br/><br/>

Apabila Anda yang ingin mendaftar untuk menjadi bagian dari Anggota <b>PT <?php echo $namapt; ?></b> dan ada oknum yang mengatas-namakan <b>PT <?php echo $namapt; ?> meminta uang keanggotaan</b>, klik <a href="<?php echo "https://".$webwa."/send?phone=".$notelwa."&text=Halo%20".@expimpd($namapt," ","%20")."%20Saya%20mau%20lapor%20tentang%20adanya%20oknum%20yang%20mengatasnamakan%20PT".@expimpd($namapt," ","%20")."%20meminta%20uang%20keanggotaan%20...%0A%0A%0A"; ?>" class="calactdanger" style="padding:2px 7px 7px 7px;" target="_blank">Lapor</a> yang apabila memungkinkan kirim foto oknum tersebut melalui <a href="<?php echo "https://".$webwa."/send?phone=".$notelwa."&text=Halo%20".@expimpd($namapt," ","%20")."%20Saya%20mau%20lapor%20tentang%20adanya%20oknum%20yang%20mengatasnamakan%20PT".@expimpd($namapt," ","%20")."%20meminta%20uang%20keanggotaan%20...%0A%0A%0A"; ?>" target="_blank">Whatsapp</a></p>
<p><img src="<?php echo $lokasiweb; ?>box/SK-PT-INDO-PINET-MART-1.jpg" style="width: 104% !important;height: auto !important;"/></p>
<p><br/><br/><img src="<?php echo $lokasiweb; ?>box/struktur-organisasi.png" style="width: 104% !important;height: auto !important;"/><br/>
<h3 style="text-align:center !important;"><a href="<?php echo $lokasiweb; ?>box/struktur-organisasi.png" target="_blank"> lihat gambar struktur</a></h3>
</p>
 </div>
</div>
</div>
<div class="elementor-element elementor-element-a8e79bb elementor-widget elementor-widget-spacer" data-id="a8e79bb" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
<span class="item-divider" aria-hidden="true"></span>
<div class="the7-e-tab-item-wrapper" data-tab="2">
<div class="the7-e-tab-title" aria-selected="false" data-tab="2" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3242" aria-expanded="false">
<h5 class="the7-e-tab-title-text">
Vision Mission </h5>
</div>
<div id="the7-e-tab-content-3242" class="the7-e-tab-content" data-tab="2" role="tabpanel" aria-labelledby="the7-e-tab-title-3242" tabindex="0" hidden="hidden"> <div class="elementor-template">
<div data-elementor-type="section" data-elementor-id="9647" class="elementor elementor-9647">
<section class="elementor-section elementor-top-section elementor-element elementor-element-5b626875 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b626875" data-element_type="section">
<div class="elementor-container elementor-column-gap-wide">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47ee66cb" data-id="47ee66cb" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-259adff4 elementor-widget elementor-widget-image" data-id="259adff4" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<img decoding="async" src="<?php echo $lokasiweb; ?>box/aboutkoin.jpg"> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2651a8ee" data-id="2651a8ee" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">

<div class="elementor-element elementor-element-1391697 elementor-widget elementor-widget-text-editor" data-id="1391697" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">

<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M14 1.5V22h-2V3.704L7.5 4.91V2.839l5-1.339z"></path></svg> </div>
</a> <div class="box-content">
<h5 class="box-heading">
<a> Vision &amp; Mission </a> </h5>
<div class="box-description">
<ul>
<li>Menjadi wadah bagi para pioneer di seluruh dunia untuk dapat membeli kebutuhan harian maupun impiannya dengan berbelanja mengunakan koin Pi Network yang mereka miliki</li>

</ul>

</div>
</div>
</div>
</div> </div>

 </div>
</div>

<div class="elementor-element elementor-element-1391697 elementor-widget elementor-widget-text-editor" data-id="1391697" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">

<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M16 7.5a4 4 0 1 0-8 0H6a6 6 0 1 1 10.663 3.776l-7.32 8.723L18 20v2H6v-1.127l9.064-10.802A3.982 3.982 0 0 0 16 7.5z"></path></svg> </div>
</a> <div class="box-content">
<h5 class="box-heading">
<a> Misi Kami </a> </h5>
<div class="box-description">

<ul>
<li>Selalu Update data Produk yang disediakan di Pi Network Mart</li>
<li>Memberikan fitur Request Barang (coming soon) yang sangat dibutuhkan oleh para pioneer </li>
<li>Memberikan bantuan keuangan ke negara yang menjadi korban bencana</li>
</ul>

</div>
</div>
</div>
</div> </div>

 </div>
</div>


</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
<span class="item-divider" aria-hidden="true"></span>
<div class="the7-e-tab-item-wrapper" data-tab="3">
<div class="the7-e-tab-title" aria-selected="false" data-tab="3" role="tab" tabindex="-1" aria-controls="elementor-tab-content-3243" aria-expanded="false">
<h5 class="the7-e-tab-title-text">
Pi Coin Calculator </h5>
</div>
<div id="the7-e-tab-content-3243" class="the7-e-tab-content" data-tab="3" role="tabpanel" aria-labelledby="the7-e-tab-title-3243" tabindex="0" hidden="hidden"> <div class="elementor-template">
<div data-elementor-type="section" data-elementor-id="9629" class="elementor elementor-9629">
<section class="elementor-section elementor-top-section elementor-element elementor-element-1af7cd33 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1af7cd33" data-element_type="section">
<div class="elementor-container elementor-column-gap-wide">

<div style="width:100% !important;" class="artikel elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-22045366" data-id="22045366" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1e98cb9 content-align-left icon-box-vertical-align-top icon-position-left icon-vertical-align-start elementor-widget elementor-widget-the7_icon_box_grid_widget" data-id="1e98cb9" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container" style="width:74vw !important;">

<form id="mencariprodukku" name="mencariprodukku" style="width: 100% !important;" onsubmit="return doconvert(); return false;">
<input type="text" placeholder="Silahkan masukkan Angka Rupiah yang ingin di konversikan ke Koin Pi" value="" name="angkarupiah" id="angkarupiah" required style="width:76%;margin-right: 7px;">
<input type="submit" class="pigoldbutton" style="border:0;" value="hitung">
</form>

<script type="text/javascript">
function doconvert() {
var angkakonversi=parseFloat(getdetectforinvalidsymb3(jQuery("#angkarupiah").val()));
jQuery("#angkarupiah").val(angkakonversi);
if (angkakonversi<250)
{jQuery("#angkarupiah").val("");
jQuery("#boxhasilhitung").html("");
return false;
}
jQuery("#boxhasilhitung").html("<br/><br/>Please Wait...");

jQuery.get('<?php echo $lokasiweb; ?>?docommand=dokalulat&angkarupiah='+angkakonversi, function(hasilnya){

if (hasilnya==0)
{jQuery("#boxhasilhitung").html("");}
else
{jQuery("#boxhasilhitung").html("<br/><br/>"+hasilnya);}
})
return false;
}

</script>
<div id="boxhasilhitung">
	

</div>



</div>
</div>
</div>
</div>

</div>
</section>
</div>
</div>
</div>
</div>
<span class="item-divider" aria-hidden="true"></span>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</section>

