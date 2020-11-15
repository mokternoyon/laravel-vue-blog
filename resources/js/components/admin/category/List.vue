<template>
  <div>
    <section class="content mt-4">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category List</h3>
                <div class="card-tools">
                  <button class="btn btn-primary">
                    <router-link to="/add-category" style="color: #fff"
                      >Add Category</router-link
                    >
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Category Name</td>
                      <td>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
  name: "List",
};
</script>

<style>
</style>