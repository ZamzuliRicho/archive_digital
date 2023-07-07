<?php
class Ajax extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_surat');
	}

	public function indekssm()
	{
		if ($this->input->post('id_indeks') != "") {
			$id_indeks = $this->input->post('id_indeks');
			$data['suratmasuk'] = $this->model_surat->getdatawithadd('suratmasuk', 'suratmasuk.id_indeks=' . $id_indeks)->result();
			$this->load->view('ajax/indekssm', $data);
		} else {
			$data['suratmasuk'] = $this->model_surat->getdata('suratmasuk')->result();
			$this->load->view('ajax/indekssm', $data);
		}
	}

	public function ajaxubahsm()
	{
		if (null !== $this->input->post('id_suratmasuk')) {
			$id_suratmasuk = $this->input->post('id_suratmasuk');
			$data['suratmasuk'] = $this->model_surat->getdatawithadd('suratmasuk', 'id_suratmasuk=' . $id_suratmasuk)->result();
			$data['indeks'] = $this->model_surat->getother('indeks')->result();
			$this->load->view('ajax/modalubahsm', $data);
		}
	}

	public function ajaxlihatsm()
	{
		if (null !== $this->input->post('id_suratmasuk')) {
			$id_suratmasuk = $this->input->post('id_suratmasuk');
			$data['suratmasuk'] = $this->model_surat->getdatawithadd('suratmasuk', 'id_suratmasuk=' . $id_suratmasuk)->result();
			$data['indeks'] = $this->model_surat->getother('indeks')->result();
			$this->load->view('ajax/modallihatsm', $data);
		}
	}


	public function ajaxcekpengisidisp()
	{
		$pengisi = $this->input->post('pengisi');
		$id_suratmasuk = $this->input->post('id_suratmasuk');
		$cek_pengisi = $this->model_surat->getotherwithadd('disposisi', 'where pengisi="' . $pengisi . '" AND id_suratmasuk=' . $id_suratmasuk)->row_array();

		if ($cek_pengisi) {
			echo 'item terpilih sudah mengisi disposisi!';
		} else {
			echo '';
		}
	}

	public function ajaxeditdisp($id_disposisi)
	{
		$data['disposisi']=$this->model_surat->getotherwithadd('disposisi', 'where id_disposisi='.$id_disposisi)->result();

		$this->load->view('ajax/ajaxeditdisp', $data);
	}

	public function ajaxcetakdisp($id_disposisi)
	{
		$data['disposisi'] = $this->model_surat->getotherwithadd('disposisi', 'inner join suratmasuk on disposisi.id_suratmasuk=suratmasuk.id_suratmasuk where id_disposisi='.$id_disposisi)->result();
		$this->load->view('ajax/ajaxcetakdisposisi', $data);
	}

	public function indekssk()
	{
		if ($this->input->post('id_indeks') != "") {
			$id_indeks = $this->input->post('id_indeks');
			$data['suratkeluar'] = $this->model_surat->getdatawithadd('suratkeluar', 'suratkeluar.id_indeks=' . $id_indeks)->result();
			$this->load->view('ajax/indekssk', $data);
		} else {
			$data['suratkeluar'] = $this->model_surat->getdata('suratkeluar')->result();
			$this->load->view('ajax/indekssk', $data);
		}
	}

	public function ajaxubahsk()
	{
		if (null !== $this->input->post('id_suratkeluar')) {
			$id_suratkeluar = $this->input->post('id_suratkeluar');
			$data['suratkeluar'] = $this->model_surat->getdatawithadd('suratkeluar', 'id_suratkeluar=' . $id_suratkeluar)->result();
			$data['indeks'] = $this->model_surat->getother('indeks')->result();
			$this->load->view('ajax/modalubahsk', $data);
		}
	}

	public function ajaxlihatsk()
	{
		if (null !== $this->input->post('id_suratkeluar')) {
			$id_suratkeluar = $this->input->post('id_suratkeluar');
			$data['suratkeluar'] = $this->model_surat->getdatawithadd('suratkeluar', 'id_suratkeluar=' . $id_suratkeluar)->result();
			$data['indeks'] = $this->model_surat->getother('indeks')->result();
			$this->load->view('ajax/modallihatsk', $data);
		}
	}

	public function ajaxubahindeks()
	{
		if (null !== $this->input->post('id_indeks')) {
			$id_indeks = $this->input->post('id_indeks');
			$data['indeks'] = $this->model_surat->getotherwithadd('indeks', 'WHERE id_indeks=' . $id_indeks)->result();

			$this->load->view('ajax/modalubahindeks', $data);
		}
	}

	public function ajaxubahindekssekunder()
	{
		if (null !== $this->input->post('id_sekunder')) {
			$id_sekunder = $this->input->post('id_sekunder');
			$data['indeks_sekunder'] = $this->model_surat->getotherwithadd('indeks_sekunder', 'WHERE id_sekunder=' . $id_sekunder)->result();

			$this->load->view('ajax/modalubahindekssekunder', $data);
		}
	}

	public function ajaxubahindekstersier()
	{
		if (null !== $this->input->post('id_tersier')) {
			$id_tersier = $this->input->post('id_tersier');
			$data['indeks_tersier'] = $this->model_surat->getotherwithadd('indeks_tersier', 'WHERE id_tersier=' . $id_tersier)->result();

			$this->load->view('ajax/modalubahindekstersier', $data);
		}
	}

	public function ajaxhapusindeks()
	{
		if (null !== $this->input->post('id_indeks')) {
			$id_indeks = $this->input->post('id_indeks');
			$data['indeks'] = $this->model_surat->getotherwithadd('indeks', 'WHERE id_indeks=' . $id_indeks)->result();

			$this->load->view('admin/pengaturan/hapusindeks', $data);
		}
	}

	public function ajaxhapusindekssekunder()
	{
		if (null !== $this->input->post('id_sekunder')) {
			$id_sekunder = $this->input->post('id_sekunder');
			$data['indeks_sekunder'] = $this->model_surat->getotherwithadd('indeks_sekunder', 'WHERE id_sekunder=' . $id_sekunder)->result();

			$this->load->view('admin/pengaturan/hapusindekssekunder', $data);
		}
	}

	public function ajaxhapusindekstersier()
	{
		if (null !== $this->input->post('id_tersier')) {
			$id_sekunder = $this->input->post('id_tersier');
			$data['indeks_tersier'] = $this->model_surat->getotherwithadd('indeks_tersier', 'WHERE id_tersier=' . $id_tersier)->result();

			$this->load->view('admin/pengaturan/hapusindekstersier', $data);
		}
	}

	public function ajaxeditprofil()
	{
		if (null !== $this->input->post('id_user')) {
			$id_user = $this->input->post('id_user');
			$data['profil'] = $this->model_surat->getotherwithadd('user', 'WHERE id_user=' . $id_user)->result();

			$this->load->view('ajax/modaleditprofil', $data);
		}
	}
}
