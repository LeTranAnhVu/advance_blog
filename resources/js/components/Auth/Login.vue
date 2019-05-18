<template>
    <section class="is-overlay-fullscreen bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <!--form-->
                                        <form class="user">
                                            <!--email-->
                                            <div class="form-group">
                                                <input v-model="account.email" type="email"
                                                       class="form-control form-control-user"
                                                       id="email" aria-describedby="emailHelp"
                                                       placeholder="Enter Email Address...">
                                            </div>
                                            <!--password-->
                                            <div class="form-group">
                                                <input v-model="account.password" type="password"
                                                       class="form-control form-control-user"
                                                       id="password" placeholder="Password" autocomplete="off">
                                            </div>
                                            <!--remember me-->
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input v-model="account.rememberMe" type="checkbox"
                                                           class="custom-control-input"
                                                           id="rememberMeCheck">
                                                    <label class="custom-control-label" for="rememberMeCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <button type="submit" @click="login()"
                                                    class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                            <hr>
                                            <!--                                            <a href="#" class="btn btn-google btn-user btn-block">-->
                                            <!--                                                <i class="fab fa-google fa-fw"></i> Login with Google-->
                                            <!--                                            </a>-->
                                            <!--                                            <a href="#" class="btn btn-facebook btn-user btn-block">-->
                                            <!--                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
                                            <!--                                            </a>-->
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.html">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                account: {
                    email: '',
                    password: '',
                    rememberMe: false
                }
            }
        },
        methods: {
            login(e){
                event.preventDefault();
                const account = {...this.account};
                this.$http.post('http://devblog.com/api/v1/auth/login', account)
                    .then(res=>{
                        const user = res.data.user;
                        this.$local_storage.setItem('user-email',user.email);
                        this.$local_storage.setItem('user-name',user.name);
                        this.$router.push({name:'admin'});
                    })
                    .catch(err=>{
                        console.log('login that bai');
                        console.log(err);
                    })
            }
        }
    }
</script>

<style scoped lang="scss">
    .is-overlay-fullscreen {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
    }
</style>