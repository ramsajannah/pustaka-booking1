<!-- Begin Page Content --> 
<div class="container-fluid"> 
<?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-3">
            <?php if(validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message"
                role="alert">Nama Kategori tidak boleh kosong</div>);
                redirect('buku/ubahkategori/' . $k['id']); 
            } ?> 

    

