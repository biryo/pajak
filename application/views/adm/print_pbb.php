<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
		*{
			margin-top: 0px;
			padding-top: 0px;	
		}
		.table-data{
			width:100%;
			border-collapse: collapse;
		}
		.table-data tr th,
		.table-data tr td{
		border:0px solid black;
		font size:11pt;
		padding: 0px 0px 0px 0px;
	 }
	 #cm{
	 	height: 1.5cm;
	 }
	 .list{
	 	padding-left: 100px;
	 }
	 #jarak{
	 	padding: 5px 0px 5px 0px;
	 }
	</style>
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
 // 21 Oktober 2017
?>
<body onafterprint="myFunction()" onload="window.print()">	
<?php
	foreach ($p_pbb as $t) {}
		?>

<table class="table-data">
	<thead>
		<tr>
			<td align="center" width="20%"><img src="<?php echo base_url().'assetss/monas.png' ?>" width="115" heigh="115"></td>			
			<td width="80%" colspan="5">
				<center>
				PEMERINTAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA<br>
				BADAN PAJAK DAN RETRIBUSI DAERAH<br>
				<b>UNIT PELAYANAN PAJAK DAN RETRIBUSI DAERAH KELAPA GADING</b><br>
				<font size="2">Jalan Gading Putih Raya No. 1 (Samping Klinik Medikarya) Telp/Fax : 2974 5005<br>
				email : upprdkelapagading@gmail.com</font><br>
				J A K A R T A<br>
				</center>					
			</td>
		</tr>
		<tr>
			<td width="100%" colspan="6"><div align="right">Kode Pos : 14240</div></td>
		</tr>		
		<tr>
			<td width="100%" colspan="6"><hr></td>
		</tr>
		<tr>
			<td >Nomor</td>
			<td >:</td>
			<td width="270px">..... / -1.722</td>
			<td  align="right" colspan="3"><?php echo tgl_indo(date('Y-m-d')); ?></td>
		</tr>
		<tr>
			<td >Sifat</td>
			<td >:</td> 
			<td colspan="4">Segera</td>
		</tr>
		<tr>
			<td >Lampiran</td>
			<td >:</td>
			<td >1 (satu) lembar</td>
			<td colspan="3">Kepada Yth</td>
		</tr>
		<tr>
			<td valign="top">Hal</td>
			<td  valign="top">:</td> 
			<td  valign="top">Pemberitahuan Tunggakan <br> Pajak PBB-P2</td>
			<td width="130px"  valign="top">Nama WP</td>
			<td  valign="top">:</td>	
			<td valign="top"><b><?php echo $t->nm_wp_sppt; ?></b></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td valign="top">Alamat WP</td>
			<td valign="top">:</td>
			<td valign="top"><b><?php echo $t->alamat_wp; ?></b></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td valign="top">Alamat OP</td>
			<td valign="top">:</td>
			<td valign="top"><b><?php echo $t->alamat_op; ?></b></td>
			<br>
		</tr>

	<tr>
		<td id="jarak"></td>
		<td colspan="5" id="jarak">
			
			<center><b>
			“Terimakasih atas peran serta Bapak / Ibu membayar pajak,<br>
			Pajak Saudara Untuk Jakarta, Maju Kotanya, Bahagia Warganya”
			</b></center>

		</td>	
	</tr>
		<tr id="jarak">
			<td></td>
			<td id="jarak" colspan="5" align="justify">&nbsp;&nbsp;&nbsp;
				Sehubungan telah lewatnya jatuh tempo pembayaran Pajak dan Bumi Bangunan
				Perdesaaan dan Perkotaan (PBB-P2) dapat kami sampaikan hal-hal sebagai berikut:
				<br>
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top" id="jarak">1.</td>
			<td id="jarak" colspan="4" align="justify">Berdasarkan catatan administrasi pada Sistem Informasi Manajemen PBB-P2 pada 
   kantor kami per tanggal <?php echo tgl_indo(date('Y-m-d')); ?>, Saudara belum melakukan pembayaran 
   Pajak Bumi dan Bangunan atas SPPT PBB-P2 sebagai berikut:</td>
   		 	 			
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top"></td>
			<td colspan="4" id="jarak">
				<table>
					<tr>
					<td width="50"></td>
					<td width="175px" valign="top" nowrap="nowrap">Nama Wajib Pajak</td>
					<td valign="top">:</td>
					<td valign="top"><b><?php echo $t->nm_wp_sppt; ?></b></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top" >Nomor Objek Pajak (NOP)</td>
					<td valign="top">:</td>
					<td valign="top"><b><?php echo $t->nop_gabung; ?></b></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top">Alamat Objek Pajak</td>
					<td valign="top">:</td>
					<td valign="top"><b><?php echo $t->alamat_op; ?></b><br></td>
				</tr>
				<tr>
					<td></td>
					<td valign="top">Dengan rincian</td>
					<td valign="top">:</td>
					<td valign="top"><b>(sebagaimana terlampir)</b></td>
				</tr>
				</table> 
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top" id="jarak">2.</td>
			<td id="jarak" colspan="4" align="justify">
				Berdasarkan Instruksi Gubernur Provinsi DKI Jakarta Nomor 105 Tahun 2016 tentang 
			   Inventarisasi Daftar Tunggakan Pajak Daerah dan Pemasangan Stiker, Papan Informasi 
			   atau Pemberitahuan Utang Pajak Daerah terhadap Penunggak PBB-P2 pada bulan 
			  <?php echo tgl_indo(date('Y-m-')); ?> akan dimulainya pemasangan stiker/papan pemberitahuan penunggak pajak.
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top" id="jarak">3.</td>
			<td id="jarak" colspan="4" align="justify">
				Selanjutnya Kerjasama Badan Pajak dan Retribusi Daerah dengan Komisi Pemberantasan
			   Korupsi (KPK)-RI dalam rangka pengawasan pembayaran pajak dan pencairan tunggakan 
			   guna mengamankan penerimaan pajak yang merupakan sumber penerimaan negara/daerah.
			  <b> Untuk menghindari penagihan paksa bersama KPK</b>, kami mohon kepada Saudara segera 
			   membayar utang pajak sesuai dengan data tersebut di atas.
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td id="jarak" valign="top">4.</td>
			<td id="jarak" colspan="4" align="justify">
				Dalam hal Saudara telah melakukan pembayaran dimaksud, kami ucapkan terimakasih 
			   dan diminta agar Saudara segera menyampaikan bukti pembayaran asli PBB-P2 dimaksud 
			   ke Unit Pelayanan Pajak dan Retribusi Daerah Kelapa Gading atau dapat melalui email 
			   ke upprdkelapagading@gmail.com.
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top"></td>
			<td id="jarak" colspan="4">&nbsp;&nbsp;&nbsp;
				Untuk informasi lebih lanjut, Saudara dapat menghubungi petugas kami ………... di Unit
				Pelayanan Pajak dan Retribusi Daerah Kelapa Gading Jl. Gading Putih Raya No 1 Jakarta
				Utara dengan nomor telepon 021-2974 5005.
			</td>
		</tr>
		<tr id="jarak">
			<td></td>
			<td valign="top"></td>
			<td id="jarak" colspan="4">
				&nbsp;&nbsp;&nbsp;Demikian pemberitahuan ini kami sampaikan, untuk menjadi perhatian Saudara dan di
				ucapkan terima kasih.
			</td>
		</tr>


		<tr>
			<td width="300"></td>
			<td align="right" colspan="5" align="right">
				Kepala Unit Pelayanan Pajak dan Retribusi Daerah<br>
				Kelapa Gading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>
		</tr><center>
		<tr>
			<td id="cm" colspan="6"> </td>
		</tr>
		<tr>
			<td width="800"></td>
			<td align="right" colspan="5" align="right"><b>Rusdian Permana&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br> 
			NIP.197404171994031001&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>
		</tr>
		<tr>
			<td colspan="6">
				<font size="1">
				Tembusan :<br>
				1.	Kepala Badan Pajak dan Retribusi Daerah Prov.DKI Jakarta<br>
				2.	Walikota Kota Administrasi Jakarta Utara<br>
				3.	Kepala Bidang Pengendalian Badan Pajak dan Retribusi Daerah Prov. DKI Jakarta<br>
				4.	Ka.Suku Badan Pajak dan Retribusi Daerah Kota Adm. Jakarta Utara dan Kab.KepulauanSeribu.<br>
				5.	Camat Kelapa Gading
				</font>
			</td>
		</tr>
</thead>
</table>
</body>
</html>
