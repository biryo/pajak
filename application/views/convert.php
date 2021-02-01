<?php
// menyertakan autoloader
		require_once 'dompdf/autoload.inc.php';

		// mengacu ke namespace DOMPDF
		use Dompdf\Dompdf;

		// menggunakan class dompdf
		$dompdf = new Dompdf();

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




	foreach ($p_resto as $t) {}		


		$html = '
<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
	<style type="text/css">
		.table-data{
			width:100%;
			border-collapse: collapse;
		}
		
		.table-data tr th,
		.table-data tr td{
		border:0px solid black;
		font size:12pt;
		padding: 0px 0px 0px 0px;
	 }

	</style>

<table class="table-data">
	<thead>
		<tr>
			<td align="center" width="20%"><img src="monas.png" width="115" heigh="115"></td>			
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
			<td width="10%">Nomor</td>
			<td width="1%">:</td>
			<td width="5%">..... / -1.722</td>
			<td width="84%" align="right" colspan="3"><?php echo tgl_indo(date("Y-m-d")); ?></td>
		</tr>
		<tr>
			<td width="10%">Sifat</td>
			<td width="1%">:</td> 
			<td width="89%" colspan="4">Segera</td>
		</tr>
		<tr>
			<td width="10%">Lampiran</td>
			<td width="1%">:</td>
			<td width="64%">1 (satu) lembar</td>
			<td width="25%" colspan="3">Kepada Yth</td>
		</tr>
		<tr>
			<td width="10%">Hal</td>
			<td width="1%">:</td> 
			<td width="5%">Pemberitahuan Tunggakan</td>
			<td width="20%">Nama WP</td>
			<td width="1%">:</td>	
				<td width="73%"><b><?php echo $t->nama; ?></b></td>
			</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Pajak PBB-2</td>
			<td>Alamat WP</td>
			<td>:</td>
			<td><b><?php echo $t->alamat_pdr; ?></b></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>Alamat OP</td>
			<td>:</td>
			<td><b><?php echo $t->alamat_pdr; ?></b></td>
		</tr>
	<tr>
		<td></td>
		<td colspan="5">
			<center><b>
			“Terimakasih atas peran serta Bapak / Ibu membayar pajak,<br>
			Pajak Saudara Untuk Jakarta, Maju Kotanya, Bahagia Warganya”
			</b></center>
		</td>	
	</tr>
		<tr>
			<td></td>
			<td colspan="5">
<pre>
   Sehubungan telah lewatnya jatuh tempo pembayaran Pajak dan Bumi Bangunan
Perdesaaan dan Perkotaan (PBB-P2) dapat kami sampaikan hal-hal sebagai berikut:

1. Berdasarkan catatan administrasi pada Sistem Informasi Manajemen PBB-P2 pada 
   kantor kami per tanggal <?php echo tgl_indo(date("Y-m-d")); ?>, Saudara belum melakukan pembayaran 
   Pajak Bumi dan Bangunan atas SPPT PBB-P2 sebagai berikut:

	Nama Wajib Pajak 	: <b><?php echo $t->nama; ?></b>
	Nomor Objek Pajak (NOP)	: <b><?php echo $t->no_pdr; ?></b>
	Alamat Objek Pajak 	: <b><?php echo $t->alamat_pdr; ?></b>
	Dengan rincian 		: <b>(sebagaimana terlampir)</b>

2. Berdasarkan Instruksi Gubernur Provinsi DKI Jakarta Nomor 105 Tahun 2016 tentang 
   Inventarisasi Daftar Tunggakan Pajak Daerah dan Pemasangan Stiker, Papan Informasi 
   atau Pemberitahuan Utang Pajak Daerah terhadap Penunggak PBB-P2 pada bulan 
  <?php echo tgl_indo(date("Y-m-")); ?> akan dimulainya pemasangan stiker/papan pemberitahuan penunggak pajak.

3. Selanjutnya Kerjasama Badan Pajak dan Retribusi Daerah dengan Komisi Pemberantasan
   Korupsi (KPK)-RI dalam rangka pengawasan pembayaran pajak dan pencairan tunggakan 
   guna mengamankan penerimaan pajak yang merupakan sumber penerimaan negara/daerah.
  <b> Untuk menghindari penagihan paksa bersama KPK</b>, kami mohon kepada Saudara segera 
   membayar utang pajak sesuai dengan data tersebut di atas.

4. Dalam hal Saudara telah melakukan pembayaran dimaksud, kami ucapkan terimakasih 
   dan diminta agar Saudara segera menyampaikan bukti pembayaran asli PBB-P2 dimaksud 
   ke Unit Pelayanan Pajak dan Retribusi Daerah Kelapa Gading atau dapat melalui email 
   ke upprdkelapagading@gmail.com.

   Untuk informasi lebih lanjut, Saudara dapat menghubungi petugas kami ………... di Unit
Pelayanan Pajak dan Retribusi Daerah Kelapa Gading Jl. Gading Putih Raya No 1 Jakarta
Utara dengan nomor telepon 021-2974 5005.

   Demikian pemberitahuan ini kami sampaikan, untuk menjadi perhatian Saudara dan di
ucapkan terima kasih.
</pre>
		</td>
		</tr>
		<tr>
			<td width="300"></td>
			<td align="right" colspan="5" align="right">
				Kepala Unit Pelayanan Pajak dan Retribusi Daerah<br>
				Kelapa Gading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>
		</tr><center>
		<tr>
			<td height="30" colspan="6"> </td>
		</tr>
		<tr>
			<td width="800"></td>
			<td align="right" colspan="5" align="right"><b>Nadeak, S.Kom, Walden M.M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br> 
			NIP.19720429 199803 1 004&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></td>
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
		';

		$dompdf->loadHtml($html);

		// (Opsional) Mengatur ukuran kertas dan orientasi kertas
		$dompdf->setPaper('Letter', 'portrait');

		// Menjadikan HTML sebagai PDF
		$dompdf->render();

		// Output akan menghasilkan PDF (1 = download dan 0 = preview)
		$dompdf->stream("Codingan",array("Attachment"=>0));
?>