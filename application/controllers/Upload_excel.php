<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_excel extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('SiswaModel');
	}
	
	public function index(){
		// $data['siswa'] = $this->SiswaModel->view();
		$this->load->view('view');
	}
	
	public function form(){
		
		$data = array(); // Buat variabel $data sebagai array
		$data['id'] = $this->uri->segment(3);

		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
			$upload = $this->SiswaModel->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet;
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('form', $data);
	}
	
	public function import(){

		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		date_default_timezone_set('Asia/Jakarta');
		$now = date('y-m-d H:i:s');
		$numrow = 1;
		$id_back = $this->uri->segment(3);

		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Kita push (add) array data ke variabel data
				IF($row['A']==5){
					$coba = 'Uji COba';
				}
				$todate = date('Y-m-d', strtotime($row['W']));
				$ondate = date('Y-m-d', strtotime($row['X']));

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


				$qualification1 = ($atls = 1) ? "ATLS" : "" ;  
			$qualification2 = ($hiperkes = 1) ? "HIPERKES" : "" ;  
			$qualification3 = ($huet = 1) ? "HUET" : "" ;  
			$qualification4 = ($bss = 1) ? "BSS" : "" ;  
			$qualification5 = ($t_bosiet = 1) ? "T-BOSIET" : "" ;  
			$qualification6 = ($btcls = 1) ? "BTCLS" : "" ;  
			$qualification7 = ($background = 1) ? "BACKGROUND CHECK" : "" ;  
			$qualification8 = ($h2s3 = 1) ? "H2S" : "" ;  
			$qualification9 = ($hse_funda = 1) ? "HSE Fundamental" : "" ;  
			$qualification10 = ($english = 1) ? "English Proficiency" : "" ;
			$qualification11 = ($drivinglcs = 1) ? "Driving LCS" : "" ;  
			$qualification12 = ($def_drive = 1) ? "Defensive Driving" : "" ;  

			$result = $qualification1 . "," . $qualification2 . "," . $qualification3 . "," . $qualification4 . "," . $qualification5 . "," . $qualification6 . "," . $qualification7 . "," . $qualification8 . "," . $qualification9 . "," . $qualification10 . "," . $qualification11 . "," . $qualification12;
			$id_main = $this->uri->segment(3);

				array_push($data, array(
					'id_main' => $id_main,
					'position'=>$row['A'], // Insert data nis dari kolom A di excel
					'jml_person'=>$row['B'], // Insert data nama dari kolom B di excel
					'exprience'=>$row['C'], // Insert data nama dari kolom B di excel
					'qualification'=>$result, // Insert data jenis kelamin dari kolom C di excel
					'location'=>$row['Q'], // Insert data alamat dari kolom D di excel
					'poh'=>$row['R'], // Insert data alamat dari kolom D di excel
					'duration'=>$row['S'], // Insert data alamat dari kolom D di excel
					'work_schedule'=>$row['T'], // Insert data alamat dari kolom D di excel
					'ratefee_benef'=>$row['U'], // Insert data alamat dari kolom D di excel
					'purpose'=>$row['V'], // Insert data alamat dari kolom D di excel
					'to_site_date'=>$todate, // Insert data alamat dari kolom D di excel
					'on_duty_date'=>$ondate, // Insert data alamat dari kolom D di excel
					'created_date'=>$now, // Insert data alamat dari kolom D di excel
					'created_by'=>$this->ion_auth->user()->row()->id,
				));
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->SiswaModel->insert_multiple($data);
		
		redirect("recruitment/detail_perclient/".$id_back); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}
}
