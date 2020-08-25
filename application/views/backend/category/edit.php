<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i>Category Edit Form </h1>
    
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Category list</li>
    <li class="breadcrumb-item"><a href="#">Create From</a></li>
  </ul>
</div>

<div class="container">
    <div class="col-md-6 offset-3">
        <div class="col-lg-6">
                <form action="<?=site_url('category/update');?>" method="post">
                 <input type="hidden" name="id" value="<?=$category->id?>">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input class="form-control" name="name" id="category" type="text" value="<?=$category->name?>" placeholder="Category">
                  </div>

                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                  
                </form>
              </div>
    </div>
</div>s