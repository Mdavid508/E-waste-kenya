<template>
    <!--Login-->
    <nav-bar/>

    <div class="container m-container bg-custom this-login">
        <div class="row pb-3">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <img src="/img/E-waste Kenya Logo.png" style="height: 97px; width: 110px;;" alt="logo">
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="companyLoginForm" onsubmit="return false">
                    <div class="form-group">
                        <label for="username" class="d-flex justify-content-center">Username</label>
                        <input v-model="email" type="text" class="form-control" id="username" name="email" placeholder="Enter username">

                    </div>
                    <div class="form-group">
                        <label for="InputPassword" class="d-flex justify-content-center">Password</label>
                        <input v-model="password" type="password" class="form-control" id="InputPassword1" name="password" placeholder="Enter Password">
                    </div>


                    <div class="d-flex flex-column align-items-center justify-content-center pt-4">
                        <button type="submit" class="btn btn-primary bg-white text-dark " @click="login()">Login</button>

                        <p class="pt-2">Dont have an account yet ? <a class="text-decoration-none text-white" href="/company-register"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <footer-view/>
</template>

<script>
import FooterView from './FooterView.vue';
import NavBar from './NavBar.vue';
import axios from '../axios'

/*eslint-disable no-undef */
export default {
    name:"CompanyLogin",
    components:{NavBar, FooterView},
    data(){
        return {
            email:'',
            password:''
        }
    },
    methods:{
        

         login() {
            const data = {
                email:this.email,
                password: this.password
            }

            for (let x in data) {
                if (data[x] == '') {
                    return Swal.fire({
                        icon: 'error',
                        title: 'Empty field found',
                        text: 'Please fill out ' + x
                    })
                }
            }

            axios.post('/api/auth/login?userType=company',data).then(
                ({data}) => {
                    console.log(data)
                    if (data.success == false) {

                        return Swal.fire({
                            icon: 'error',
                            title: 'Login Error',
                            text: data.message,
                        })

                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Login Successful as ' + data.data.name,
                        showConfirmButton: false,
                        timer: 2000
                    })

                    sessionStorage.setItem('auth', JSON.stringify(data.data));

                    setTimeout(() => window.location.replace('/feed'), 2000)

                }).catch(err => console.log(err))
        }
    },
    created(){

    }
}
</script>

<style scoped>
.this-login{
    margin-bottom: 27px;
}
</style>