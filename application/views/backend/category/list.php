
<div class="app-title">

        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
  <h1><?=$message?></h1>
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
                      foreach ($categories as $category): ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$category->name;?></td>
                      <td><?=$category->created_at;?></td>
                      <td>
                        <a href="<?=site_url('category/edit/'.$category->id)?>" class="btn btn-outline-danger btn-sm">
                          delete
                        </a>
                         <a href="" class="btn btn-outline-warning btn-sm">
                          Edit
                        </a>
                      </td>
                      
                    </tr>
                  <?php endforeach;?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>