import PostList from "../../components/Admin/Post/PostList";
import PostAdd from "../../components/Admin/Post/PostAdd";
import PostEdit from "../../components/Admin/Post/PostEdit";
import PostView from "../../components/Admin/Post/PostView";

export default [
  {
    path: '/post',
    name: 'post-list',
    component: PostList,
    meta: {
      title: 'Admin'
    }
  },
  {
    path: 'post/add',
    name: 'post-add',
    component: PostAdd,
    meta: {
      title: 'Admin',
    },
  },
  {
    path: 'post/edit',
    name: 'post-edit',
    component: PostEdit,
    meta: {
      title: 'Admin',
    },
  },
  {
    path: 'post/view',
    name: 'post-view',
    component: PostView,
    meta: {
      title: 'Admin',
    },
  }

];
