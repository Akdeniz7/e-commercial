<?php
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");

if(isset($_REQUEST["SK"])){
    $SayfaKoduDegeri    =   SayiliIcerikleriFiltrele($_REQUEST["SK"]);
}else{
    $SayfaKoduDegeri    =   0;
}
?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<meta name="Robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">  
<title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
<link type="image/png" rel="icon" href="Resimler/Favicon.png">
<meta name="Description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
<meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
<script type="text/javascript" src="Frameworks/JQuery/jquery-3.6.0.min.js" language="javascript"></script>   
<link type="text/css" rel="stylesheet" href="Ayarlar/style.css">
<script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>   
    
    
</head>
	
<body>
    <table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="40" bgcolor="#353745">
            <td><img src="Resimler/HeaderMesajResmi.png" border="0"></td>
        </tr
        <tr>
            <td height="110">
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp;</td>
                        <td width="20"><a href="xxxxx"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="70" class="MaviAlanMenusu"><a href="xxxxx">Giriş Yap</a></td>
                        <td width="20"><a href="xxxxx"><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="85" class="MaviAlanMenusu"><a href="xxxxx">Yeni Üye Ol</a></td>
                        <td width="20"><a href="xxxxx"><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="103" class="MaviAlanMenusu"><a href="xxxxx">Alışveriş Sepeti</a></td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="192"><a href="index.php"><img src="Resimler/<?php echo DonusumleriGeriDondur($SiteLogosu); ?>" border="0"></a></td>
                        <td>
                            <table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="306" class="AnaMenu">&nbsp;</td>
                                    <td width="107" class="AnaMenu"><a href="index.php">Ana Sayfa</a></td>
                                    <td width="160" class="AnaMenu"><a href="xxxxx">Erkek Ayakkabıları</a></td>
                                    <td width="160" class="AnaMenu"><a href="xxxxx">Kadın Ayakkabıları</a></td>
                                    <td width="140" class="AnaMenu"><a href="xxxxx">Çocuk Ayakkabıları</a></td>               
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
        
        <tr>
            <td valign="top" align="center"><table>
                <tr>
                    <td><?php
                        if((!$SayfaKoduDegeri) or ($SayfaKoduDegeri=="") or ($SayfaKoduDegeri==0)){
                            include($Sayfa[0]);
                        }else{
                            include($Sayfa[$SayfaKoduDegeri]);
                        }
                    
                    
                    
                    ?><br />
                    </td>
                </tr>
            </table></td>
        </tr>
        
        <tr height="210">
            <td><table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9">
                    <tr height="30" >
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;" >&nbsp;<b>Kurumsal</b></td>
                        <td width="22" >&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;" ><b>Üyelik & Hizmetler</b></td>
                        <td width="22" >&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;" ><b>Sözleşmeler</b></td>
                        <td width="21" >&nbsp;</td>
                        <td width="250" style="border-bottom: 1px dashed #CCCCCC;" ><b>Bizi Takip Edin</b></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=1">Hakkımızda</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="xxxxx">Giriş Yap</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=2">Üyelik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                                <td width="20"><a href="xxxxx"><img src="Resimler/Twitter16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="_blank">Twitter</a></td>
                            </tr> 
                        </table></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=8">Banka Hesaplarımız</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="xxxxx">Yeni Üye Ol</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=3">KUllanım Koşulları</a></td>
                        <td>&nbsp;</td>
                        <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                                <td width="20"><a href="xxxxx"><img src="Resimler/Instagram16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank">Instagram</a></td>
                            </tr> 
                        </table></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="index.php?SK=9">Havale Bildirim Formu</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="xxxxx">Sık Sorulan Sorular</a></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                                <td width="20"><a href="xxxxx"><img src="Resimler/LinkedIn16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedIn); ?>" target="_blank">LinkedIn</a></td>
                            </tr> 
                        </table></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="xxxxx">Kargom Nerede?</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=5">Mesafeli Satış Sözleşmesi</a></td>
                        <td>&nbsp;</td>
                        <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0" >
                            <tr>
                                <td width="20"<a href="xxxxx"><img src="Resimler/Facebook16x16.png" border="0" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="_blank">Facebook</a></td>
                            </tr> 
                        </table></td>
                    </tr>
                    <tr height="30">
                        <td class="AltMenusu">&nbsp;<a href="xxxxx">İletişim</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=6">Teslimat</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
                    <tr height="30">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td class="AltMenusu"><a href="index.php?SK=7">İptal & İade & Değişim</a></td>
                        <td>&nbsp;</td>
                        <td></td>
                    </tr>
            </table></td>
        </tr>
    
        <tr height="30">
			<td><table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center"><?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?></td>
				</tr>
			</table></td>
		</tr>

		<tr height="30">
			<td><table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center"><img src="Resimler/RapidSSL32x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/InternetteGuvenliAlisveris28x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/3DSecure14x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/BonusCard41x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/MaximumCard46x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/WorldCard48x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/CardFinans78x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/AxessCard46x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/ParafCard19x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/VisaCard37x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/MasterCard21x12.png" border="0" style="margin-right: 5px;"><img src="Resimler/AmericanExpiress20x12.png" border="0"></td>
				</tr>
			</table></td>
		</tr>
	</table>
	
</body>
</html>
<?php
$VeriTabaniBaglantisi   =   null;
?>