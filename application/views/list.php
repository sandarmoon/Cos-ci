    
            <div class="col-lg-10 mb-5">

                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    
                    <div class="card-header justify-content-center">
                        <h3 class="font-weight-light my-4 text-center"> Read  </h3>
                    </div>

                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-12 my-2">
                                <a href="<?= site_url('suggest/create')?>" class="btn btn-primary float-right">
                                    <i class="icofont-plus"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th> No </th>
                                                <th> Name </th>
                                                <th> Developer Career Life </th>
                                                <th> Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                                $i=1;

                                                foreach ($suggests as $suggest):
                                                   $id=$suggest->id;
                                                   $name=$suggest->username;
                                                   $s1=$suggest->suggest_one;
                                                
                                             ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $name;  ?></td>
                                                <td><?= $s1;  ?> </td>
                                                <td>
                                                    <a href="<?= site_url('suggest/detail/'.$id)  ?>" class="btn btn-outline-success">
                                                        <i class="icofont-info"></i>
                                                    </a>

                                                    <a href="<?= site_url('suggest/edit/'.$id) ?>" class="btn btn-outline-warning">
                                                        <i class="icofont-settings-alt"></i>
                                                    </a>

                                                    <a href="<?= site_url('suggest/delete/'.$id) ?>" class="btn btn-outline-danger">
                                                        <i class="icofont-ui-close"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                           
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
