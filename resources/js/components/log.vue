<template>
  <form action="" class="text-info">
    <br/>
    <div class="text-center col px-md-3"><img src="../../../public/assets/ESI_Logo2.png" height="100" alt="">
      </div>
      <br/>
     <p class="mb-4 mt-4 h2 text-monospace text-info list-inline text-center ">Connexion</p>
    <div class="">
      <mdb-input v-model="fields.email" label="Adresse email" icon="envelope" type="email"/>
      <br/>
      <mdb-input v-model="fields.password" label="Mot de passe" icon="lock" type="password"/>
    </div>
    <br/>
    <div class="text-center">
     <mdb-btn  outline="primary-text" type="button" style="border-radius:5px;">Se connecter</mdb-btn>
     <br/>
     <br/>
    </div>
  </form>
</template>
 
<script>

  import { mdbInput, mdbBtn } from 'mdbvue';
  
  export default {
    name: 'Basic',
    components: {
      mdbInput,
      mdbBtn
    }, data() {
      return {
        fields: {
          password: "",
          email: ""
        }
      };
    },
    methods: {
      validate() {
        const form = [...arguments];
        const emailRegexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        for (let index in form) {
          let field = form[index];
          if (field === "email" && !emailRegexp.test(this.fields[field])) {
            return false;
          } else if (this.fields[field] === "") {
            return false;
          }
        }
        return true;
      },
      submitForm(event) {
        event.target.classList.add("was-validated");
        if (this.validate("password","email")) {
          axios
            .post("/test", this.fields)
            .then(response => {
              alert("Message sent!");
              this.fields = {};
              event.target.classList.remove("was-validated");
            })
            .catch(error => {
              console.log(error);
            });
        }
      }
    }
  }
</script>