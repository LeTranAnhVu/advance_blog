<template>
  <section id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <side-bar/>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <top-bar :user="user"/>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <!--<main-content/>-->
          <post-list/>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <admin-footer/>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
  </section>
</template>

<script>
  import AdminSidebar from "./Admin/AdminSidebar";
  import AdminTopBar from "./Admin/AdminTopBar";
  import AdminMainContent from "./Admin/AdminMainContent";
  import AdminFooter from "./Admin/AdminFooter";
  import AdminPostList from "./Admin/Post/PostList";

  export default {
    name: "Admin",
    components: {
      'side-bar': AdminSidebar,
      'top-bar': AdminTopBar,
      'main-content': AdminMainContent,
      'admin-footer': AdminFooter,
      // Build component post
      'post-list': AdminPostList,
    },
    data() {
      return {
        user: {},
      }
    },
    beforeCreate() {

    },
    created() {
      this.user.name = this.$local_storage.getItem('user-name');
      this.user.email = this.$local_storage.getItem('user-email');
    }
  }
</script>

<style scoped>

</style>
