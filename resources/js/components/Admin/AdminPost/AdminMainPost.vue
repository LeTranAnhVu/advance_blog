<template>
  <div class="container-fluid main-post">
    <div class="d-flex align-items-center mb-3">
      <h1 class="h3 mb-0 text-gray-800">Post</h1>
      <a href="#" class="btn-add btn btn-sm btn-primary shadow-sm"><i
          class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
    </div>
    <!--filter link post-->
    <div class="filter-button-post">
      <ul>
        <li>
          <a href="#" class="active">All <span>(5)</span></a>
        </li>
        <li>
          <a href="#">Mine <span>(3)</span></a>
        </li>
        <li>
          <a href="#">Published <span>(1)</span></a>
        </li>
        <li>
          <a href="#">Trash <span>(1)</span></a>
        </li>
      </ul>
    </div>
    <!--filter select post-->
    <div class="filter-select-post">
      <select class="form-control form-control-sm">
        <option>All dates</option>
        <option>January 2019</option>
        <option>February 2019</option>
        <option>March 2019</option>
      </select>
      <select class="form-control form-control-sm">
        <option>All Categories</option>
        <option>Uncategorized</option>
        <option>HTML5</option>
        <option>CSS3</option>
        <option>Javascript</option>
        <option>Typescript</option>
      </select>
      <a href="#" class="btn-filter btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-sort"></i>
        </span>
        <span class="text">Filter</span>
      </a>
    </div>
  </div>
</template>
<script>
  export default {
    name: "AdminMainPost",
  }
</script>
<style scoped lang="scss">
.main-post {
  .btn-add {
    font-weight:bold;
    padding:5px 20px;
    margin-left:20px;
  }
  .filter-button-post {
    ul {
      padding: 0px;
      margin-bottom: 10px;
      li {
        display: inline-block;
        list-style: none;
        a {
          color: #4e73df;
          font-size: 14px;
          margin-right: 10px;
          text-decoration: none;
          &:hover {
            color: #000000;
          }
          &.active {
            color: #000000;
            font-weight: bold;
          }
          span {
            font-weight: 100;
            color: black;
          }
        }
      }
    }
  }
  .filter-select-post {
    display: flex;
    align-items: center;
    select {
      width: 150px;
      outline: none;
      box-shadow: none;
      border: 1px solid #4e73df;
      font-weight: bold;
      margin-right: 10px;
    }
    .btn-filter {
      border-radius: 3px;
      outline: none;
      box-shadow: none;
      span {
        padding: 2.5px 12px!important;
      }
    }
  }
}
</style>
