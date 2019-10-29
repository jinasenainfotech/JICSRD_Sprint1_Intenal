<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function page_construct($page, $data = array()) {

        if(!isset($_SESSION['user'])){
            redirect(base_url('login'),'refresh');
            die;
        }
        $meta['success'] = isset($_SESSION['success']) ? $_SESSION['success'] : $this->session->flashdata('success');
        $meta['error'] = isset($_SESSION['error']) ? $_SESSION['error'] : $this->session->flashdata('error');
        $meta['warning'] = isset($_SESSION['warning']) ? $_SESSION['warning'] : $this->session->flashdata('warning');
        $meta['info'] = isset($_SESSION['info']) ? $_SESSION['info'] : $this->session->flashdata('info');

        $user = $this->session->userdata('user');
        $permission = $this->session->userdata('permission');
        $meta['admin'] = false; 
        $meta['manager'] = false;
        $meta['analyst'] = false; 

        $meta['user_name'] = $user['user_name'];
        if ($permission->permission_set_id == 1) { $meta['manager'] = true; }elseif($permission->permission_set_id == 2) { $meta['admin'] = true; }else{
           $meta['analyst'] = true; }

           $this->data['settings'] = 'setting';
           $this->data['theming'] = 'setting_theming';
           $this->data['auth'] = 'Auth';

           $this->load->view('assets');
           $this->load->view('header',$meta);
           $this->load->view($page,$data);
           $this->load->view('footer');
       }

   }
