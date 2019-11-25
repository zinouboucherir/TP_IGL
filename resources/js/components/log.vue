<template>
  <form v-bind:action="__url" method="POST" class="text-info">
    <br/>
    <div class="text-center col px-md-3"><img src="../../../public/assets/ESI_Logo2.png" height="100" alt="">
      </div>
      <br/>
     <p class="mb-4 mt-4 h2 text-monospace text-info list-inline text-center ">Connexion</p>
    <div class="">
      <mdb-input name="email" label="Adresse email" icon="envelope" type="email"/>
      <br/>
      <mdb-input name="password" label="Mot de passe" icon="lock" type="password"/>
    </div>
    <br/>
    <div class="text-center">
     <mdb-btn  outline="primary-text"  type="submit" style="border-radius:5px;">Se connecter</mdb-btn>
     <br/>
     <br/>
    </div>
  </form>
</template>
 
<script>

  import { mdbInput, mdbBtn } from 'mdbvue';
  
  export default {
    name: 'Basic',
    props:['url'], 
    components: {
      mdbInput,
      mdbBtn
    }, data() {
      return {
        __url: this.url,
      };
    }
  }
</script>