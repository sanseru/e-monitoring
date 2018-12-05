<html>
<head>
	<title>Form Import</title>
	
	<!-- Load File jquery.min.js yang ada difolder js -->
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	
	<script>
	$(document).ready(function(){
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
	</script>
</head>
<body>
	<h3>Form Import</h3>
	<hr>
	
	<a href="<?php echo base_url("excel/format.xlsx"); ?>">Download Format</a>
	<br>
	<br>
	
	<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
	<form method="post" action="<?php echo base_url("index.php/upload_excel/form/".$id); ?>" enctype="multipart/form-data">
		<!-- 
		-- Buat sebuah input type file
		-- class pull-left berfungsi agar file input berada di sebelah kiri
		-->
		<input type="file" name="file">
		
		<!--
		-- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
		-->
		<input type="submit" name="preview" value="Preview">
	</form>
	
	<?php
	if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
		if(isset($upload_error)){ // Jika proses upload gagal
			echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
			die; // stop skrip
		}
		
		// Buat sebuah tag form untuk proses import data ke database
		echo "<form method='post' action='".base_url("index.php/Upload_excel/import/".$id)."'>";
		
		// Buat sebuah div untuk alert validasi kosong
		echo "<div style='color: red;' id='kosong'>
		Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
		</div>";
		
		echo "<table border='1' cellpadding='8'>
		<tr>
			<th colspan='12'>Preview Data</th>
		</tr>
		<tr>
			<th>Position</th>
			<th>Jumlah Person</th>
			<th>Exprience</th>
			<th>Qualification</th>
			<th>Location</th>
			<th>Point Of Hire</th>
			<th>Duration</th>
			<th>Schedule</th>
			<th>Rate Benefit</th>
			<th>Purpose</th>
			<th>To Site Date</th>
			<th>On Site Date</th>

		</tr>";
		
		$numrow = 1;
		$kosong = 0;
		
		// Lakukan perulangan dari data yang ada di excel
		// $sheet adalah variabel yang dikirim dari controller
		foreach($sheet as $row){ 
			// Ambil data pada excel sesuai Kolom
			$position = $row['A']; // Ambil data Posisis
			$jml_person = $row['B']; // Ambil data Jumlah Person
			$exprn = $row['C']; // Ambil data jenis Expriance
			$atls = $row['D']; // Ambil data alamat
			$hiperkes = $row['E']; // Ambil data alamat
			$huet = $row['F']; // Ambil data alamat
			$bss = $row['G']; // Ambil data alamat
			$t_bosiet = $row['H']; // Ambil data alamat
			$btcls = $row['I']; // Ambil data alamat
			$background = $row['J']; // Ambil data alamat
			$h2s3 = $row['K']; // Ambil data alamat
			$hse_funda = $row['L']; // Ambil data alamat
			$english = $row['M']; // Ambil data alamat
			$drivinglcs = $row['N']; // Ambil data alamat
			$def_drive = $row['O']; // Ambil data alamat
			$other = $row['P']; // Ambil data alamat
			$location = $row['Q']; // Ambil data alamat
			$poh = $row['R']; // Ambil data alamat
			$duration = $row['S']; // Ambil data alamat
			$schedule = $row['T']; // Ambil data alamat
			$rate_benef = $row['U']; // Ambil data alamat
			$pupose = $row['V']; // Ambil data alamat
			$to_site_date = $row['W']; // Ambil data alamat
			$on_duty_date = $row['X']; // Ambil data alamat


			$cdate = date('Y-m-d', strtotime($to_site_date));
			$ddate = date('Y-m-d', strtotime($on_duty_date));

			$qualification1 = ($atls == 1) ? "ATLS" : "" ;  
			$qualification2 = ($hiperkes == 1) ? "HIPERKES" : "" ;  
			$qualification3 = ($huet == 1) ? "HUET" : "" ;  
			$qualification4 = ($bss == 1) ? "BSS" : "" ;  
			$qualification5 = ($t_bosiet == 1) ? "T-BOSIET" : "" ;  
			$qualification6 = ($btcls == 1) ? "BTCLS" : "" ;  
			$qualification7 = ($background == 1) ? "BACKGROUND CHECK" : "" ;  
			$qualification8 = ($h2s3 == 1) ? "H2S" : "" ;  
			$qualification9 = ($hse_funda == 1) ? "HSE Fundamental" : "" ;  
			$qualification10 = ($english == 1) ? "English Proficiency" : "" ;
			$qualification11 = ($drivinglcs == 1) ? "Driving LCS" : "" ;  
			$qualification12 = ($def_drive == 1) ? "Defensive Driving" : "" ;  

			$result = $qualification1 . "," . $qualification2 . "," . $qualification3 . "," . $qualification4 . "," . $qualification5 . "," . $qualification6 . "," . $qualification7 . "," . $qualification8 . "," . $qualification9 . "," . $qualification10 . "," . $qualification11 . "," . $qualification12;  
			
			// Cek jika semua data tidak diisi
			if(empty($position) && empty($jml_person) && empty($pupose) && empty($to_site_date))
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
			
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Validasi apakah semua data telah diisi
				$position_td = ( ! empty($position))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
				$jml_person_td = ( ! empty($jml_person))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
				$exprn_td = ( ! empty($exprn))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
				$result_td = ( ! empty($result))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$location_td = ( ! empty($location))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$poh_td = ( ! empty($poh))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$duration_td = ( ! empty($duration))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$schedule_td = ( ! empty($schedule))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$rate_benef_td = ( ! empty($rate_benef))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$pupose_td = ( ! empty($pupose))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$to_site_date_td = ( ! empty($to_site_date))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				$on_duty_date_td = ( ! empty($on_duty_date))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
				
				// Jika salah satu data ada yang kosong
				if(empty($position) or empty($jml_person) or empty($exprn) or empty($result) or empty($location) or empty($poh) or empty($duration) or empty($schedule) or empty($pupose)){
					$kosong++; // Tambah 1 variabel $kosong
				}
				
				echo "<tr>";
				echo "<td".$position_td.">".$position."</td>";
				echo "<td".$jml_person_td.">".$jml_person."</td>";
				echo "<td".$exprn_td.">".$exprn."</td>";
				echo "<td".$result_td.">".$result."</td>";
				echo "<td".$location_td.">".$location."</td>";
				echo "<td".$poh_td.">".$poh."</td>";
				echo "<td".$duration_td.">".$duration."</td>";
				echo "<td".$schedule_td.">".$schedule."</td>";
				echo "<td".$rate_benef_td.">".$rate_benef."</td>";
				echo "<td".$pupose_td.">".$pupose."</td>";
				echo "<td".$to_site_date_td.">".$cdate."</td>";
				echo "<td".$on_duty_date_td.">".$ddate."</td>";


				echo "</tr>";
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
		echo "</table>";
		
		// Cek apakah variabel kosong lebih dari 0
		// Jika lebih dari 0, berarti ada data yang masih kosong
		if($kosong > 0){
		?>	
			<script>
			$(document).ready(function(){
				// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
				$("#jumlah_kosong").html('<?php echo $kosong; ?>');
				
				$("#kosong").show(); // Munculkan alert validasi kosong
			});
			</script>
		<?php
		}else{ // Jika semua data sudah diisi
			echo "<hr>";
			
			// Buat sebuah tombol untuk mengimport data ke database
			echo "<button type='submit' name='import'>Import</button>";
			echo "<a href='".base_url("index.php/Siswa")."'>Cancel</a>";
		}
		
		echo "</form>";
	}
	?>
</body>
</html>
