import authService from '../service/api/auth';

export default function guard(router) {
    const self = this;
    router.beforeEach((to, from, next) => {
        // do nothing
        // if (to.name === 'login') return next();
        // // route should protectd
        // authService.isAuthenticate()
        //     .then(res => {
        //         if (from.name === 'login') {
        //             console.log('Authorized');
        //             self.toasted.show('Authorized', {type: 'success'});
        //         }
        //         next();
        //     })
        //     .catch(err => {
        //         self.toasted.show('Unauthorized', {type: 'error'});
        //         next({name: 'login'});
        //     })
        return next();
    });
}