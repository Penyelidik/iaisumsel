

          <!-- Page Heading -->
         
          <section id="main-content">
      <section class="wrapper site-min-height">
         <h3><strong> <?= $title ?>  </strong></h3>
          <?= $this->session->flashdata('message'); ?>
       <?php echo form_open_multipart('Admin/upload_upcoming');?>
        <div class="login-wrap">
        
                                           
          Pamflet:
          <input type="file" name="berkas" required ><br><br>
          <button class="btn btn-theme btn-primary"  type="submit"><i class="fas fa-share-square">&nbsp;</i>Post Event</button>
          <hr>
         
        </div>
        <!-- modal -->
      </form>

      </section>
      <!-- /wrapper -->
</section>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
