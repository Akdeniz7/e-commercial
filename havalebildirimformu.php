<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="500" valign="top"><table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="40">
                <td style="color: #FF9900"><h3>Havale Bildirim Formu</h3></td>
            </tr>
            <tr height="30">
                <td valign="top" style="border-bottom: 1px dashed #CCCCCC;" >Tamamlanmış Olan Ödeme İşleminizi Aşağıdaki Formdan İletiniz.</td>
            </tr>
            
            
            <tr height="30">
                <td valign="bottom" align="left">Isim Soyisim</td>
            </tr>
            <tr height="30">
                <td valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari" ></td>
            </tr>
            
            <tr height="30">
                <td valign="bottom" align="left">E-Mail Adresi</td>
            </tr>
            <tr height="30">
                <td valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
            </tr>
            
            <tr height="30">
                <td valign="bottom" align="left">Telefon Numarası</td>
            </tr>
            <tr height="30">
                <td valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari" ></td>
            </tr>
            
            <tr height="30">
                <td valign="bottom" align="left">Ödeme Yapılan Banka</td>
            </tr>
            <tr height="30" align="left">
                <td valign="top"><select name="BankaSecimi" class="SelectAlanlari">
                    <?php
                    $BankalarSorgusu     =   $VeriTabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");
                    $BankalarSorgusu->execute();
                    $BankaSayisi         =   $BankalarSorgusu->rowCount();
                    $BankaKayitlari      =   $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($BankaKayitlari as $Bankalar){
                    ?>
                    <option value="<?php echo $Bankalar["id"]; ?>"><?php echo $Bankalar["BankaAdi"]; ?></option>
                    <?php
                    }
                    ?>
                    </select></td>
            </tr>
            
            <tr height="30">
                <td valign="bottom" align="left">Açıklama</td>
            </tr>
            <tr height="30">
                <td valign="top" align="left"><textarea name="Aciklama" class="TextAreaAlanlari"></textarea></td>
            </tr>
            
            <tr height="30">
                <td align="center" ><input type="submit" value="Bildirimi Gönder" class="YesilButon" ></td>
            </tr>
            
        </table></td>
        <input type="button" value="Back" onclick="history.back()" />
        
        
        
        <td width="20">&nbsp;</td>
        
        
        
        <td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="40">
                <td style="color: #FF9900"><h3>İşleyiş</h3></td>
            </tr>
            <tr height="30">
                <td valign="top" style="border-bottom: 1px dashed #CCCCCC;">Havale / EFT İşlemlerinin Kontrolü.</td>
            </tr>
        </table></td>
    </tr>
</table>