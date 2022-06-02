<template>
<nav-bar/>
<!--POST FORM-->
    <div class="container m-container bg-custom">
      <div class="row pb-2">
        <div
          class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center"
        >
          <input class="d-none" type="file" accept="image/*" id="inpfile"  @change="uploadImage"/>
          <label for="inpfile">
            <div class="rounded-circle bg-white p-3">
              <img src="/img/camera.jpg" alt="Camera" />
            </div>
          </label>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 flex-column">
          <div class="image-preview" id="imagePreview">
            <img src="" alt="Image Preview" class="image-preview__image " />
            <span class="image-preview__default-text text-muted">
              Image Preview
            </span>
          </div>
          <p class="text-muted" style="font-size: 16px">
            Add atleast 3 Images Supported formats are ..*jpg ..*gif ..*png
          </p>
        </div>
      </div>
      <!--Form-->
      <form action="">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
              
              <input
              v-model="name"
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="name of item"
                required
              />
            </div>
          </div>
  
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
              
              <input
              v-model="price"
                type="number"
                min="0"
                max="10000"
                name="price"
                class="form-control"
                id="Price"
                placeholder="Enter Price"
                required
              />
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
              
              <input
              v-model="location"
                type="text"
                name="location"
                class="form-control"
                id="location"
                placeholder="Enter Location"
              />
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="form-group">
              
              <textarea
              v-model="description"
                name="description"
                class="form-control"
                id=""
                cols=""
                rows="5"
                placeholder="Add Description"
                required
              ></textarea>
            </div>
          </div>
        </div>
      </form>
      
      <div class="row d-flex justify-content-center align-items-center pt-0">
        <button class="btn btn-primary" @click="postGadget">
          Confirm
        </button>
      </div>
    </div>
    
</template>

<script>
import NavBar from './NavBar.vue'
import axios from '../axios'
import Swal from 'sweetalert2'

export default {
    name:"PostView",
    components:{NavBar},
    data(){
        return {
          name:'',
          price:'',
          location:'',
          description:'',
          image:''
        }
    },
    methods:{
        uploadImage(e){
      const inpfile = e.target;
      const previewContainer = document.getElementById("imagePreview");
      const previewImage = previewContainer.querySelector(".image-preview__image");
      const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
      const Parent = this;
      inpfile.addEventListener("change", function(){
        const file =this.files[0]; //index zero because its a single file select
        
        if (file) { 
            const reader =new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block"; 

            reader.addEventListener("load", function(){
          
              previewImage.setAttribute("src", this.result)
              Parent.image = this.result;
            });

            reader.readAsDataURL(file);
        } else{
            previewDefaultText.style.display = null;
            previewImage.style.display = null;
            previewImage.setAttribute("src", "");
        }
      });
        },
        postGadget(){
          //send item to back end
          //get user data
          const user = JSON.parse(window.sessionStorage.getItem('auth'))
          if(!user){
            return Swal.fire({
              icon:'error',
              title:'Not loggged in',
              text:'You need to be logged in to post a gadget'
            })
          }
          const userId = user.id;
          const categoryId = 2;

          const data = {
            user_id: userId,
            category_id: categoryId,
            name: this.name,
            location: this.location,
            description: this.description,
            image: this.image
          }

          for(let x in data){
            if(data[x] == ''){
              return Swal.fire({
                icon:'error',
                title:'Empty fields',
                text:'Please fill out '+x
              })
            }
          }
          axios.post('/api/gadgets', data).then(({data})=>{
            if(data.success == false){
              //eslint-disable-next-line no-undef
              Swal.fire({
                icon:'error',
                title:'Unable to post your gadget',
                text: data.message
              })
            }

            Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your gadget was posted successfully!",
            showConfirmButton: false,
            timer: 2000,
          })

        setTimeout(()=>this.$router.push('/feed'), 2000);
        
          }).catch(err=>console.log(err));
      }
    },
    created(){

    }
}
</script>

<style scoped>
@media only screen and (min-width:768px) {
    .m-container {
        width: 550px;
        height: 660px;
        padding: 10px;
        margin-top: 25px;
        border-radius: 25px;
    }
}
</style>