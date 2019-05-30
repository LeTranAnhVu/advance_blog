import Service from './api-base';

const resource = '/auth';
export default {
    login(account) {
        // account : email and password and remember me
        return Service.post(`${resource}/login`, account);
    },
    logout() {
        return Service.post(`${resource}/logout`, {});
    },
    isAuthenticate(){
        return Service.post(`/admin/authenticated`, {});
    }
}