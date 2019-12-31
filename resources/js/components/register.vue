<template>
  <mdb-container class="mt-3">
    <mdb-card style="border-radius:5px;">
      <br/>
     <div class="text-center col px-md-5">
      <img src="../../../public/assets/ESI_Logo2.png" height="100" alt=""></div>
      <mdb-card-title class="mt-4 h2 text-monospace  text-info text-center" >Inscription</mdb-card-title>
      <mdb-card-body>
      
        <form class="needs-validation" method="POST" v-bind:action="register_url">
          <mdb-row>
            <mdb-col md="12">
               <mdb-row>
                <mdb-col>
                  <mdb-input label="Nom" name="name" required />
                </mdb-col>
                <mdb-col>
                  <mdb-input label=" vous étes ?" name="type" required />
                </mdb-col>
              </mdb-row>
    
              <mdb-row>
                <mdb-col>
                  <mdb-input type="email" label="Your email" name="email" required />
                </mdb-col>
              </mdb-row>
              
               <mdb-row>
                <mdb-col>
                   <mdb-input name="password" label="Mot de passe"  type="password"/>
                </mdb-col>
                <mdb-col>
                   <mdb-input name="confirm_password" label="Confirmer le mot de passe" type="password"/>
                </mdb-col>
              </mdb-row>
            
            </mdb-col>
           
          </mdb-row>
            <br/>
        
   
          <mdb-btn type="submit" outline="info">S'inscrire</mdb-btn>
      
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
     props:['url'], 
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
        register_url:this.url
      };
    }
 
  };
</script>
<style scoped>
  .container {
    text-align: center;
  }
</style>