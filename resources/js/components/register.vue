<template>
  <mdb-container class="mt-3">
    <mdb-card>
      <br/>
     <div class="text-left col px-md-5">
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/ESI_Logo.png" height="80" alt=""></div>
      <mdb-card-title class="mt-4 h2 text-monospace text-dark list-inline text-center">Inscription</mdb-card-title>
      <mdb-card-body>
      
        <form class="needs-validation" novalidate @submit.prevent="submitForm">
          <mdb-row>
            <mdb-col md="12">
               <mdb-row>
                <mdb-col>
                  <mdb-input label="Nom" v-model="fields.name" required />
                </mdb-col>
                <mdb-col>
                  <mdb-input label="Prénom" v-model="fields.prénom" required />
                </mdb-col>
              </mdb-row>
    
              <mdb-row>
                <mdb-col>
                  <mdb-input type="email" label="Your email" v-model="fields.email" required />
                </mdb-col>
              </mdb-row>
              
               <mdb-row>
                <mdb-col>
                   <mdb-input v-model="fields.password" label="Mot de passe"  type="password"/>
                </mdb-col>
                <mdb-col>
                   <mdb-input v-model="fields.password1" label="Confirmer le mot de passe" type="password"/>
                </mdb-col>
              </mdb-row>
            
            </mdb-col>
           
          </mdb-row>
            <br/>
          <div class="text-center">
                <mdb-btn size="lg" type="submit" class="font-weight-bold" outline="black" style="border-radius:5px;">S'inscrire</mdb-btn>
          </div>
        </form>
      </mdb-card-body>
    </mdb-card>
  </mdb-container>
</template>
<script>
  import {
    mdbContainer,
    mdbInput,
    mdbCard,
    mdbCardHeader,
    mdbCardTitle,
    mdbCardText,
    mdbCardBody,
    mdbIcon,
    mdbBtn,
    mdbRow,
    mdbCol
  } from "mdbvue";

  export default {
    components: {
      mdbContainer,
      mdbInput,
      mdbCard,
      mdbCardHeader,
      mdbCardTitle,
      mdbCardBody,
      mdbCardText,
      mdbIcon,
      mdbBtn,
      mdbRow,
      mdbCol
    },
    data() {
      return {
        fields: {
          name: "",
          prénom:"",
          email: "",
          password: "",
          password1: "",
          message: "",
        }
      };
    },
    methods: {
      submitForm(event) {
        event.target.classList.add("was-validated");
        // submit form
      }
    }
  };
</script>
<style scoped>
  .container {
    text-align: center;
  }
</style>