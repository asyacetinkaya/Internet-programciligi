<?php  
class Auth extends CI_Controller
{
    
     public function register()
        {
            $this->load-> library('form_validation');
            $this->form_validation->set_rules('first_name','First name','required');
            $this->form_validation->set_rules('last_name','Last name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('password','Password','required');
           
            if ($this->form_validation->run()==false)
            {
                $this->load->view('register');
            }
            else{
                $this->load->model ('Auth_model');
                $formArray = array ();
                $formArray['first_name'] = $this->input->post ('first_name');
                $formArray['last_name'] = $this->input->post ('last_name');
                $formArray['email'] = $this->input->post ('email');
                $formArray['phone'] = $this->input->post ('phone');
                $formArray['password'] = $this->input->post ('password');
                $formArray['created_at'] = date (format: 'Y-m-d H:i:s');

                $this->Auth_model->create ($formArray);

                $this->session->set_flashdata('msg','Bilgileriniz kaydedildi');
                redirect (uri: base_url().'index.php/Auth/register');



             }
            
            
        }

    
}








