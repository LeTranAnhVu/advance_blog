<template>
  <div class="container-fluid main-post">
    <!--title-->
    <div class="d-flex align-items-center mb-3">
      <h1 class="h3 mb-0 text-gray-800 mr-3">Add New Post</h1>
      <a href="#" class="btn-add btn btn-sm btn-primary shadow-sm">Preview</a>
    </div>
    <!--form post-->
    <div class="row">
      <div class="col-lg-9">
        <form action="#">
          <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" placeholder="Add Title">
          </div>
          <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" value="the-post-first">
          </div>
          <div class="form-group">
            <label for="">Editor Post</label>
            <vue-editor id="editor"> </vue-editor>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <!--Feature Image-->
        <div class="form-group feature-image">
          <label for="">Feature Image</label>
          <input type="file">
        </div>
        <!--Categories-->
        <div class="form-group categories">
          <div class="title mb-2">Categories</div>
          <ul>
            <li>
              <input type="checkbox">
              <span class="ml-1">Uncategoried</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">Sports</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">Movies</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">Showbiz</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">International</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">Vietnamese</span>
            </li>
            <li>
              <input type="checkbox">
              <span class="ml-1">Japanese</span>
            </li>
          </ul>
        </div>
        <!--Tags-->
        <div class="form-group tags">
          <label for="">Tags</label>
          <div class="add-tag d-flex">
            <input type="text" class="tag-input form-control mr-2">
            <button class="btn btn-primary">Add</button>
          </div>
          <p>Separate tags with commas</p>
          <ul>
            <li>
              <button class="fas fa-times-circle"></button>
              weebsite
            </li>
            <li>
              <button class="fas fa-times-circle"></button>
              front-end
            </li>
            <li>
              <button class="fas fa-times-circle"></button>
              javascript
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { VueEditor } from "vue2-editor";

  export default {
    name: 'post-add',
    components: {
      VueEditor
    }
  }
</script>

<style scoped lang="scss">
  .form-group {
    background: #FFFFFF;
    padding: 15px;
    .form-control {
      background-color: #FFFFFF;
      border: 1px solid #ccc;
      border-radius: inherit;
      outline:none;
      box-shadow:none;
    }
    .quillWrapper {
      background-color: #FFFFFF;
      border: none;
    }
  }
  .categories {
    ul {
      padding: 0px;
      li {
        list-style: none;
        padding: 5px 0px;
        span {
          color: #4e73df;
        }
      }
    }
  }
  .tags {
    p {
      font-size: 14px;
      padding: 8px 0px;
      margin: 0px;
    }
    ul {
      padding: 0px;
      li {
        display:inline-block;
        list-style: none;
        padding: 10px 10px 10px 0px;
        button {
          padding: 0px;
          border: none;
          outline:none;
          color: #4e73df;
          &:hover {
            color: #e74a3b;
          }
        }
      }
    }
  }
</style>
