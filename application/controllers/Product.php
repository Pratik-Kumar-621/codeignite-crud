<?php


class Product extends CI_Controller
{
    public function index()
    {
        $data['product_details'] = $this->product_model->getAllProducts();
        $this->load->view('product', $data);
    }
    public function addProduct(){
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('category', 'Product Category', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');

        if($this->form_validation->run() == false){
            $data_error = [
                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        }

        else{
            $adding = $this->product_model->insertProduct([
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
            ]);

            if($adding){
                $this->session->set_flashdata('inserted', 'Added Successfully');
            }

        }

        redirect('product');

    }
  
    public function editProduct($id){
        $data['singleProduct'] = $this->product_model->getSingleProduct($id);
        $this->load->view('edit_view',$data);
    }

    public function update($id){
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('category', 'Product Category', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');

        if($this->form_validation->run() == false){
            $data_error = [
                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        }

        else{
            $adding = $this->product_model->updateProduct([
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
            ],$id);

            if($adding){
                $this->session->set_flashdata('updated', 'Updated Successfully');
            }

        }

        redirect('product');
    }


    public function deleteProduct($id){
        $result = $this->product_model->deleteItem($id);
        if($result == true){
            $this->session->set_flashdata('deleted', "Product is deleted");
        }
        redirect('product');
    }
}

?>