<?php
class M_beranda extends CI_Model
{

    function getminuman()
    {
        $y['judul'] = "MINUMAN";
        $y['dataminuman'] = $this->m_menu->minuman();
        $this->load->view('mobile/v_beranda', $y);
    }
    function cek_login()
    {
        if ($this->session->userdata('online')) {
        }
    }
}
