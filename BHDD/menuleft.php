<table width="100%" border="1" bordercolor="#999999">
        	    <tr>
               		
        	   		 <td height="99" align="center" ><img src="Việt Anh Mobile - Hệ thống bán lẻ Smartphone chính hãng_files/partner-1429870513.png"></td>
      	      </tr>
        	   
                <?php
				$qr=danhsachhang();
				while($row_hang=mysql_fetch_array($qr))
					{
						ob_start();
					?>
                     <tr><td height="35"><div id="{mahang}"><a href="?c={mahang}&b=mahang">{tenhang}</a></div></td></tr>
                    <?php
					$s=ob_get_clean();
					$s=str_replace("{mahang}",$row_hang["mahang"], $s);
					$s=str_replace("{tenhang}",$row_hang["tenhang"], $s);
					echo $s;
					}
					?>
        	
      	      
        	    
      	    </table>