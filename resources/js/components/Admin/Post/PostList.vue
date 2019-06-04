<template>
  <div class="container-fluid main-post">
    <!--title-->
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
      <a href="#" class="btn-filter btn btn-danger btn-icon-split mr-2">
        <span class="icon text-white-50">
          <i class="fas fa-trash-alt"></i>
        </span>
        <span class="text">Remove All</span>
      </a>
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
    <!--Table list post-->
    <div class="list-post table-responsive mt-3">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid"
                   aria-describedby="dataTable_info" style="width: 100%;">
              <thead>
                <tr role="row">
                  <th style="width: 10px; text-align:center">
                    <input type="checkbox">
                  </th>
                  <th style="width: 74px;">Title</th>
                  <th style="width: 106px;">Author</th>
                  <th style="width: 55px;">Categories</th>
                  <th style="width: 31px;">Tags</th>
                  <th style="width: 69px;">Comment</th>
                  <th style="width: 67px;">Date</th>
                </tr>
              </thead>
              <tbody>
              <tr role="row">
                <td style="text-align: center;">
                  <input type="checkbox">
                </td>
                <td class="sorting_1">
                  Code Cards: How to Remove Duplicate Dictionaries in a List
                  <ul class="action-post">
                    <li>
                      <a href="#">Edit</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#" class="remove">Remove</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#">View</a>
                    </li>
                  </ul>
                </td>
                <td>Jonathan Hsu</td>
                <td>Front-End</td>
                <td>JS, ES5, ES6</td>
                <td>100</td>
                <td>30/5/2019</td>
              </tr>
              <tr role="row">
                <td style="text-align: center;">
                  <input type="checkbox">
                </td>
                <td class="sorting_1">
                  How to Finally Understand Generics in TypeScript
                  <ul class="action-post">
                    <li>
                      <a href="#">Edit</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#" class="remove">Remove</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#">View</a>
                    </li>
                  </ul>
                </td>
                <td>Jim Rottinger</td>
                <td>Front-End</td>
                <td>JS, ES5, TypeScript</td>
                <td>85</td>
                <td>30/5/2019</td>
              </tr>
              <tr role="row">
                <td style="text-align: center;">
                  <input type="checkbox">
                </td>
                <td class="sorting_1">
                  JavaScript and React unit tests basics
                  <ul class="action-post">
                    <li>
                      <a href="#">Edit</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#" class="remove">Remove</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#">View</a>
                    </li>
                  </ul>
                </td>
                <td>Luís Cardoso</td>
                <td>Front-End</td>
                <td>JS, React</td>
                <td>50</td>
                <td>30/5/2019</td>
              </tr>
              <tr role="row">
                <td style="text-align: center;">
                  <input type="checkbox">
                </td>
                <td class="sorting_1">
                  Let's build a boilerplate with React and Webpack!
                  <ul class="action-post">
                    <li>
                      <a href="#">Edit</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#" class="remove">Remove</a>
                      <span>|</span>
                    </li>
                    <li>
                      <a href="#">View</a>
                    </li>
                  </ul>
                </td>
                <td>Samuel Omole</td>
                <td>Front-End</td>
                <td>JS, React, Webpack</td>
                <td>205</td>
                <td>30/5/2019</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="paginate_button page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" class="page-link">4</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" class="page-link">5</a>
                </li>
                <li class="paginate_button page-item next" id="dataTable_next">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    name: 'AdminMainPost',
  }
</script>
<style scoped lang="scss">
  .main-post {
    .btn-add {
      font-weight: bold;
      padding: 5px 20px;
      margin-left: 20px;
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
        background-color: #ffffff;
        outline: none;
        box-shadow: 0px 3px 6px -3px #4e73df;
        border: 1px solid #4e73df;
        font-weight: bold;
        margin-right: 10px;
      }

      .btn-filter {
        border-radius: 3px;
        outline: none;
        box-shadow: none;

        span {
          padding: 2.5px 12px !important;
        }
      }
    }

    .list-post {
      thead {
        background-color: #4e73df;
        color: white;
      }
      tbody {
        tr {
          td {
            color: #3f3f3f;
            font-size: 14px;
          }
          .action-post {
            margin: 0px;
            padding: 0px;
            margin-top: 5px;
            transition: all 0.3s;
            opacity: 0;
            visibility: hidden;
            li {
              list-style:none;
              display:inline-block;
              a {
                color: #4e73df;
                text-decoration: none;
                &:hover {
                  color: #0031bf;
                }
                &.remove {
                  color: #a00;
                  &:hover {
                    color:#f00000;
                  }
                }
              }
              span {
                color: #d1d2d3
              }
            }
          }
          &:hover {
            .action-post {
              opacity: 1;
              visibility: visible;
            }
          }
        }
      }
    }
  }
</style>
