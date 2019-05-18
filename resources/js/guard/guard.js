export default function guard(router) {
    const self =this;
    router.beforeEach((to, from, next) => {
        // do nothing
        if (to.name === 'login') return next();

        // route should protectd
        self.$http.post('http://devblog.com/api/v1/admin/authenticated', {})
            .then(res => {
                console.log('Authorized');
                next();
            })
            .catch(err=>{
                console.log('login that bai');
                console.log(err);
                next({name: 'login'});
            })
    });
}