<?php
    class Pages extends CI_Controller {
        public function view($page='home'){
            if(!file_exists(APPPATH . 'views/pages/' . $page. '.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);
            $data['categorias'] = $this->post_model->get_cats();
            //todos los proyectos
            $data['posts'] = $this->post_model->get_posts_by_limit();


            $this->load->view('templates/header');
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer');

        }



        public function proyectos_by_cat_limit($cat_id){
                  
                    
            $data['posts'] = $this->post_model->get_proyectos_by_cat_limit($cat_id);
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }

        public function proyectos_all(){
        
            $data['posts'] = $this->post_model->get_posts_by_limit();
            $data['categorias'] = $this->post_model->get_cats();
            $this->load->view('templates/proyectos_even', $data);
        }


        public function firma(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/nuestrafirma');
            $this->load->view('templates/footer');
            
        }
        public function servicios(){
            
            $this->load->view('templates/header');
            $this->load->view('pages/servicios');
            $this->load->view('templates/footer');
            
        }

        public function contacto(){
            $this->load->view('templates/header');
            $this->load->view('pages/contacto');
            $this->load->view('templates/footer');
        }

        public function contacto_email(){

            $this->load->library('email');

            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.sendgrid.net',
                'smtp_port' => 2525,
                'smtp_user' => 'apikey',
                'smtp_pass' => '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'
            );

            $config['mailtype'] = 'html';
            $config['mailpath'] = "/usr/lib/sm.bin/sendmail"; 
            $config['mailtype'] = 'html';
            $config['charset']  = 'utf-8';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
           

            $this->email->set_newline("\r\n");


            $this->email->from('no-reply@codigoub.com');
            $this->email->to(
                array('bensondaniel664@gmail.com', 'ventas@codigoub.com.mx'));
            $this->email->subject('this is a test');

            $data['nombre'] = $this->input->post('nombre');
            $data['email'] = $this->input->post('email');
            $data['mensaje'] = $this->input->post('mensaje');
            $data['tel'] = $this->input->post('tel');



            $body = $this->load->view('templates/email_contacto',$data ,TRUE);



            $this->email->message($body);




            if($this->email->send()) {
                $this->load->view('templates/header');
                $this->load->view('templates/email_success');
                $this->load->view('templates/footer');
            }else {
                show_error($this->email->print_debugger());
            }



        }

      



    }
