<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Personal extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_personal', 'mod');
    }

    public function class_data()
    {
        $data['base_level'] = $this->uri->segment(1);
        $data['base_class'] = 'personal';

        return $data;
    }

    public function index()
    {
        $data                   = self::class_data() + MY_Controller::data_session();
        $data['base_function']  = 'detail_profil';
        $data['table_view']     = 'v_personal_lokasi';
        $data['title']          = 'Detail Data Personal';
        $data['id_detail']      = $this->uri->segment(4);
        $data['lokasi']		   = array(
            'provinsi' => $this->mod->get_provinsi(),
            'kabupaten' => $this->mod->get_kabupaten(),
            'provinsi_selected' => '',
            'kabupaten_selected' => '',
            );
        $data['personal']                   = $this->mod->tampil_personal($data);
        //$data['result'] 		= $this->mod->detail_personal($this->uri->segment(4));
        //$data                   = $this->mod->detail_personal($data);
        // print('<pre>'); print_r($data['personal']); exit();
        $this->parser->parse('tpl_penjual/template', $data);
    }

    public function detail()
    {   
        //unset($data);
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_function'] = 'ubah_personal';
        $data['table_view']    = 'personal';
        $data['title']         = 'Ubah Data Personal';
        $data['id_detail']      = $this->uri->segment(4);
        $data['lokasi']		   = array(
            'provinsi' => $this->mod->get_provinsi(),
            'kabupaten' => $this->mod->get_kabupaten(),
            'provinsi_selected' => '',
            'kabupaten_selected' => '',
            );
        $data                   = $this->mod->fetch_id($data);
       // dump_exit($data);
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_penjual/template', $data);
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->mod->hapus('personal', $id);
        redirect(base_url($data['base_level'] . 'penjual/personal'));
    }


    public function ubah()
    {
    $aksi = $this->input->post('aksi');
    $data = [
        'id_personal' => $this->input->post('id_personal'),
        'nama_personal' => $this->input->post('nama_personal'),
        'hp_personal' => $this->input->post('hp_personal'),
        'email_personal' => $this->input->post('email_personal'),
        'provinsi_personal' => $this->input->post('provinsi_personal'),
        'kabupaten_personal' => $this->input->post('kabupaten_personal'),
        'password_personal' => $this->input->post('password_personal'),
        'level_personal' => $this->input->post('level_personal'),
    ];
    //print('<pre>'); print_r($data); print_r($aksi); exit();
    if ($aksi == 'simpan'){
        $this->mod->ubah_personal($data);
        redirect(site_url('penjual/personal'));
    } else {
        //echo "no";
        redirect(site_url('penjual/personal'));
        }
    }

    public function upload()
    {
        $data                  = self::class_data() + MY_Controller::data_session();
        $data['base_level'] = '';
        $data['base_class'] = 'personal';
        $data['base_function'] = 'upload';
        $data['title'] = 'Upload Foto Profil';
        $data['result'] = $this->mod->detail_personal($this->uri->segment(4));
        //print('<pre>'); print_r($data); exit();
        $this->parser->parse('tpl_penjual/template', $data);
    }

    public function upload_proses()
    {
        $config['upload_path']          = './assets/foto_personal';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 20000;
        $config['max_width']            = 5000;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);           
        $this->upload->do_upload('foto_personal');
        $foto_personal = $this->upload->data('file_name');
        $aksi = $this->input->post('aksi');
        $data = [
            'id_personal' => $this->input->post('id_personal'),
            'foto_personal' => $foto_personal,
        ];
        //print('<pre>'); print_r($data); exit();
        if ($aksi == 'simpan') {
            $this->mod->upload($data);
            redirect(site_url('penjual/personal'));
        } else {
            redirect(site_url('penjual/personal'));
        }
    }

}

