<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4 justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catId">Category Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="catId"
                      placeholder="Enter Category Name"
                      name="cat_name"
                      v-model="form.cat_name"
                    />
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">
                    Save Category
                  </button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
  name: "New",
  dat() {
    return {
      form: new From({
        cat_name: "",
      }),
    };
  },
  methods: {},
};
</script>

<style>
</style>