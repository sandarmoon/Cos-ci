
<div class="app-title">

        <div>
          <h1><i class="fa fa-th-list"></i> Brand Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>

 <?php if($this->session->has_userdata('msg')): ?>
  <div class="alert alert-success" role="alert">
  <?=$this->session->userdata('msg');?>
  </div>
  
<?php endif;?>
<?php $this->session->sess_destroy(); ?>
 <!-- form create -->
      <div class="row">
        <div class="col-md-12">
           <h4 class="text-muted">Create Brand New</h4>
          <div class="tile">
           
            <div class="tile-body">
              <!-- <?php echo validation_errors(); ?> -->
               <form action="<?php echo site_url('brand/store'); ?>" enctype="multipart/form-data" method="post">
                  <div class="form-row">
                    <div class="col-md-9 row">
                      <div class="col">
                        <label for="">Brand Name</label>
                        <?php echo form_error('name', '<span class="error text-danger  p-2">', '</span>'); ?>
                      <input type="text" class="form-control" name="name" placeholder="First name">
                      </div>
                      <div class="col">
                        <label for="">Logo Photo</label>
                        <?php echo form_error('logo', '<span class="error text-danger p-2">', '</span>'); ?>
                        <input type="file" class="form-control" name="logo" >
                      </div>
                    </div>
                    <div class="col">
                      <label for=""></label>
                      <input type="submit" class="btn btn-sm btn-outline-primary form-control mt-2" value="Create Now!" >
                    </div>
                    
                  </div>
               
               </form>
            </div>
          </div>
        </div>
      </div>

<!-- edit form-->
       <div class="row">
        <div class="col-md-12">
           <h4 class="text-muted">Edit Brand </h4>
          <div class="tile">
           
            <div class="tile-body">
              <!-- <?php echo validation_errors(); ?> -->
               <form id="edit-form" action="<?php echo site_url('brand/update'); ?>" enctype="multipart/form-data" method="post">
                  <div class="form-row">
                    <input type="hidden" name="oldLogo" >
                    <input type="hidden" name="oldid">
                    <div class="col-md-9 row">
                      <div class="col">
                        <label for="" >Brand Name</label>
                        <?php echo form_error('name', '<span class="error text-danger  p-2">', '</span>'); ?>
                      <input type="text" class="form-control " name="name" placeholder="First name">
                      </div>
                      <div class="col">
                       
                        <?php echo form_error('logo', '<span class="error text-danger p-2">', '</span>'); ?>
                        <ul class="nav  " id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <a class="nav-link active pt-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link pt-0" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                          </li>
                         
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active pr-2" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <img src="<?=base_url('uploads/iconone1.png')?>"  style="width: 10%;height: 5vh;object-fit: cover;">
                          </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                             <input type="file" class="form-control" name="logo" >
                          </div>
                          
                        </div>
                       
                      </div>
                    </div>
                    <div class="col">
                      <label for=""></label>
                      <input type="submit" class="btn btn-sm btn-outline-primary form-control mt-2" value="Update Now!" >
                    </div>
                    
                  </div>
               
               </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Created Date</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     <?php
                     // var_dump($categories);
                     $i=1;
                      foreach ($brands as $brand): ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><img src="<?=base_url($brand->logo)?>" style="width: 40%;height: 10vh;object-fit: cover;"><?=$brand->name;?></td>
                      <td><?php $date=date_create($brand->created_at);
                      echo date_format($date,'Y-m-d'); ?></td>
                      <td>
                        <a href="javascript::void(0)" class="btn btn-outline-warning btn-sm brand-edit" data-base="<?=site_url('brand/edit').'/'.$brand->id?>" data-id="<?=$brand->id?>">
                          Edit
                        </a>
                         <a href="<?=site_url('brand/delete/'.$brand->id)?>" class="btn btn-outline-danger btn-sm">
                          Delete
                        </a>
                      </td>
                      
                    </tr>
                     <?endforeach;?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>