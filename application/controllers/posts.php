<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller
{

    function index()
    {
        $data['posts'] = $this->mongoci->db->artikel->find();

        $this->load->view('list', $data);
//        print_r($data['posts']);

    }

    function tambah()
    {
        $this->load->view('tambah');
    }

    function prosesTambah()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('d-M-Y H:i:s');
        $post = array('judul' => $judul, 'isi' => $isi, 'tanggal' => $tanggal);

        $this->mongoci->db->artikel->insert($post);
        redirect('posts.php');
    }

    function ubah()
    {
        $id = $_GET['id'];
//        $data['cari'] = $this->mongoci->db->artikel->findOne(array('_id'=>$id));
        $collection = $this->mongoci->db->selectCollection('artikel');
        $data['cari'] = $collection->findOne(array("_id" => new MongoId($id)));
        $this->load->view('ubah',$data);
    }

    function prosesUbah(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date('d-M-Y H:i:s');
//        $post = array('_id' => new MongoId($id)), array('$set' => array('judul' => $judul, 'isi' => $isi, 'tanggal' => $tanggal));
        $this->mongoci->db->artikel->update(array('_id' => new MongoId($id)), array('$set' => array('judul' => $judul, 'isi' => $isi, 'tanggal' => $tanggal)));
        redirect('posts.php');
    }

    function hapus(){
        $id = $_GET['id'];
        $collection = $this->mongoci->db->selectCollection('artikel');
        $data['cari'] = $collection->remove(array("_id" => new MongoId($id)));
        redirect('posts.php');
    }
}