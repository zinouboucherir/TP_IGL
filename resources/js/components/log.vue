<template>
  <!-- Material form login -->
  <form action="">
    <br/>
    <div class="text-center">
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/ESI_Logo.png" height="80" alt="">
    </div>
    <div class="grey-text">
      <mdb-input v-model="fields.email" label="Adresse email" icon="envelope" type="email"/>
      <mdb-input v-model="fields.password" label="Mot de passe" icon="lock" type="password"/>
    </div>
    <br/>
    <div class="text-center">
     <mdb-btn color="elegant">Connexion</mdb-btn>
    </div>
    <br/><br/>
  </form>
  <!-- Material form login -->
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