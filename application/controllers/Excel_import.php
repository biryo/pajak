<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('excel_import_model');
		$this->load->library('excel');
	}

	function index()
	{
		$this->load->view('adm/header');
		$this->load->view('adm/excel_import');
		$this->load->view('adm/footer');
	}
	
	function fetch()
	{
		$data = $this->excel_import_model->select();
		$output = '
		<h3 align="center">Total Data - '.$data->num_rows().'</h3>
		<table class="table table-striped table-bordered">
			<tr>
				<th>NOPD</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tarif</th>
				<th>Status</th>
			</tr>
		';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->nop_gabung.'</td>
				<td>'.$row->nm_wp_sppt.'</td>
				<td>'.$row->alamat_op.'</td>
				<td>'.$row->tarif.'</td>
				<td>'.$row->stts.'</td>
			</tr>
			';
		}
		$output .= '</table>';
		
	}

	function import()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$nop_gabung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nm_wp_sppt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$alamat_wp = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$alamat_op = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$tarif = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$stts = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$data[] = array(
						'nop_gabung'			=>	$nop_gabung,
						'nm_wp_sppt'			=>	$nm_wp_sppt,
						'alamat_wp'				=>	$alamat_wp,
						'alamat_op'				=>	$alamat_op,
						'tarif'					=>	$tarif,
						'stts'					=>	$stts
					);
				}
			}
			$this->excel_import_model->insert($data);
			echo 'Data Imported successfully';
		}	
	}

	function import_resto()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$nop_gabung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nm_wp_sppt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$alamat_op = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$stts = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'no_pdr'					=>	$nop_gabung,
						'nama'						=>	$nm_wp_sppt,
						'alamat_pdr'				=>	$alamat_op,
						'stts'						=>	$stts
					);
				}
			}
			$this->excel_import_model->insert_resto($data);
			echo 'Data Imported successfully';
		}	
	}

	function import_hotel()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$nop_gabung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nm_wp_sppt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$alamat_op = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$stts = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'no_pdh'					=>	$nop_gabung,
						'nama'						=>	$nm_wp_sppt,
						'alamat_pdh'				=>	$alamat_op,
						'stts'						=>	$stts
					);
				}
			}
			$this->excel_import_model->insert_hotel($data);
			echo 'Data Imported successfully';
		}	
	}

	function import_parkir()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$nop_gabung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nm_wp_sppt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$alamat_op = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$stts = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'no_pdp'					=>	$nop_gabung,
						'nama'						=>	$nm_wp_sppt,
						'alamat_pdp'				=>	$alamat_op,
						'stts'						=>	$stts
					);
				}
			}
			$this->excel_import_model->insert_parkir($data);
			echo 'Data Imported successfully';
		}	
	}

	function import_hiburan()
	{
		if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					$nop_gabung = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$nm_wp_sppt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$alamat_op = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$stts = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'no_pdhb'					=>	$nop_gabung,
						'nama'						=>	$nm_wp_sppt,
						'alamat_pdhb'				=>	$alamat_op,
						'stts'						=>	$stts
					);
				}
			}
			$this->excel_import_model->insert_hiburan($data);
			echo 'Data Imported successfully';
		}	
	}
}

?>