      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-tags"></i> Category Menu</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo site_url()?>">Home</a></li>
						<li><i class="fa fa-tags"></i>Category Menu</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
	<?php echo __get_error_msg(); ?>
					<h3 class="box-title" style="margin-top:0;"><a href="<?php echo site_url('categories/categories_add'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> Add Category Menu</a></h3>
                      <section class="panel">
                          <header class="panel-heading">
                              List Category Menu
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
          <th>Position</th>
          <th>Name</th>
          <th>Description</th>
          <th>Status</th>
          <th></th>
                                </tr>
                              </thead>
                              <tbody>
		  <?php
		  foreach($categories as $k => $v) :
		  ?>
                                        <tr>
          <td><a href="<?php echo ($v -> cposition == 1 ? 'javascript:void(0);' : site_url('categories/setposition/?pos=up&cid='.$v -> cid.'&cposition=' . $v -> cposition)); ?>"><i class="fa fa-toggle-up"></i></a> <a href="<?php echo ($v -> cposition == $total ? 'javascript:void(0);' : site_url('categories/setposition/?pos=down&cid='.$v -> cid.'&cposition=' . $v -> cposition)); ?>"><i class="fa fa-toggle-down"></i></a></td>
          <td><?php echo $v -> cname; ?></td>
          <td><?php echo substr($v -> cdesc,0,150); ?></td>
          <td><?php echo __get_status($v -> cstatus,1); ?></td>
		  <td>
              <a class="btn btn-primary" href="<?php echo site_url('categories/categories_update/' . $v -> cid); ?>"><i class="fa fa-pencil"></i></a>
              <a class="btn btn-danger" href="<?php echo site_url('categories/categories_delete/' . $v -> cid); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
          </td>
										</tr>
        <?php endforeach; ?>
                              </tbody>
                            </table>
                      </section>
                  </div>
              </div>
