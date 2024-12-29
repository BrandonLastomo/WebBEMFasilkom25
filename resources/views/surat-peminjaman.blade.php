<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Peminjaman BEM Fasilkom UNSIKA</title>
	<style type="text/css">

		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
		body{
			font-family: 'Times New Roman', Times, serif;
		}

		.garis{
			margin-top: -3px;
			width: 690px;
			height: 4px;
			background-color: black;
		}

		td .formulir{
			height: 10px;
		}

		img{
			position: relative;
			z-index: -1;
			top: 0px;
			left: 0px;
			right: 1;
			bottom: 15px;
		}

		table tr td .kop-surat{
			margin-left: 120px;
		}

	</style>
	@auth
    <form action="/riwayat/downloadpf/{{ $data->id }}" method="GET"></form>
</head>
<body>
			<center>
				<table>
					<tr>
						<td>
							<center>
							<div style="position: absolute; margin-left: 30px;">
								<img src="<?php echo $pic ?>" alt="" width="110" height="105" >
							</div>
							<div class="kop-surat">
							<font size="4">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, <br> RISET, DAN TEKNOLOGI</font><br>
							<font size="4">UNIVERSITAS SINGAPERBANGSA KARAWANG</font><br>
							<font size="4"><b>BADAN EKSEKUTIF MAHASISWA <br>FAKULTAS ILMU KOMPUTER</b></font><br>
							<font size="3" style="color: #1f497d;"><em>Sekretariat: Jl. H.S. Ronggowaluyo Teluk Jambe Karawang 41361 <br>
											Hp: 085814404967/085694978264</em></font><br>
							<font size="3" style="color: #1f497d;"><i>Email: bem.cs@unsika.ac.id  Website: www.bem.cs.unsika.ac.id</i></font>
							</div>
						</center>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<hr>
							<div class="garis"></div>
						</td>
					</tr>
				</table>
				<br>
				<br>
				<center>
				<font size="3"><u><b>FORMULIR PEPINJAMAN BARANG</b></u></font>
				</center>
				<br>
				<br>
				<div style="width:685px; text-align: justify; line-height: 1.8;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini saya bermaksud mengajukan peminjaman barang inventaris milik BEM Fasilkom Unsika &nbsp;&nbsp;dengan rincian sebagai berikut:
				</div>
				<br>
				</table>
				<table width="525" style="margin-left: 5px;">
					<tr>
						<td width="125">
							<p>Nama Penanggung Jawab</p>
						</td>
						<td width="541">: {{ Auth::user()->nama }}</td>
					</tr>
					<tr>
						<td width="125">
							<p>No. HP Penanggung Jawab</p>
						</td>
						<td width="541">: {{ Auth::user()->no_hp }}</td>
					</tr>
					<tr>
						<td width="125">
							<p>Nama Barang</p>
						</td>
						<td width="541">: {{ $data->barang }}</td>
					</tr>
					<tr>
						<td width="125">
							<p>Jumlah</p>
						</td>
						<td width="541">: {{ $data->jumlah }} Unit</td>
					</tr>
					<tr>
						<td width="125">
							<p>Tanggal Peminjaman</p>
						</td>
						<td width="541">: {{ \Carbon\Carbon::parse($data->tanggal_pinjam)->translatedFormat('d F Y') }}</td>
					</tr>
					<tr>
						<td width="125">
							<p>Estimasi Pengembalian</p>
						</td>
						<td width="541">: {{ \Carbon\Carbon::parse($data->estimasi_pengembalian)->translatedFormat('d F Y') }}</td>
					</tr>
				</table>
				<br>
				<div style="width:685px; text-align: justify; line-height: 1.8;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dan saya <b>bertanggung jawab sepenuhnya</b> atas segala bentuk <b>kerusakan</b>, <b>kehilangan</b>, atau <b>&nbsp;&nbsp;kelalaian pengembalian barang</b> yang mengakibatkan durasi peminjaman barang yang tidak sesuai &nbsp;&nbsp;dengan rincian permohonan dalam formulir ini. Saya juga bersedia atas sanksi yang diberikan jika saya &nbsp;&nbsp;terbukti melakukan kelalaian dalam peminjaman barang.
				</div>
				<div style="width:685px; text-align: justify; line-height: 1.8;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat permohonan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan &nbsp;&nbsp;terima kasih.
				</div>
				<br>
				<br>
				<table width="685" >
					<tr>
						<td width="200">
						</td>
						<td class="text" align="justify">Karawang, {{ \Carbon\Carbon::parse($data->tanggal_pinjam)->translatedFormat('d F Y') }}<br><br><br><br><br><br><br>{{ Auth::user()->nama }}<br>{{ Auth::user()->npm }}</td>
					</tr>
				 </table>
			</center>
			@endauth
</body>
</html>