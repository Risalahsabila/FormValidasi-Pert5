<?php
class Matakuliah extends CI_controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah',
        'required|min_length[3]', [
        'required' => 'Kode Matakuliah Harus diisi',
        'min_lenght' => 'Kode terlalu pendek']);
        
        $this->form_validation->set_rules('nama', 'Nama Matakuliah',
        'required|min_;length[3]', [
        'required' => 'Nama Matakuliah Harus diisi',
        'min_lenght' => 'Nama terlalu pendek']);
        
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } elsa {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
             ];

            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
