<template>
  <mdb-row>
    <mdb-col class="pb-2">
      <mdb-card class="text-info grey lighten-4">
        <mdb-card-header class="pt-4 white">
          <mdb-card-title><strong>Ajouter étudiant</strong></mdb-card-title>
        </mdb-card-header>
        <form v-bind:action="this.url" method="POST">
        <mdb-card-body>
          <mdb-row>
            <mdb-col md="6">
              <mdb-input label="Nom"  name="nom" icon="user" required  />
              <mdb-input far icon="user" name="prenom" label="Prénom"  required />
              <mdb-input   icon="envelope" name="email" label="adresse email "  required  />
             <mdb-input far icon="map" name="adress" label="Adresse" required/>
             <mdb-input icon="lock" type="password" name="password" label="Mot de passe" required />
                
            </mdb-col>
            <mdb-col md="6">
               <mdb-input label="Matricule" name="matricule" far icon="id-card" required />
               <div>
            
    </div>
              <mdb-input icon="users" name="groupe" label="Groupe" required/>
               <mdb-input icon="users" name="promo" label="Promo" required/>
              
               
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex white justify-content-center">
          <mdb-btn outline="info" type="submit" icon="paper-plane">Ajouter</mdb-btn>
        </mdb-card-footer>
        </form>
      </mdb-card>
    </mdb-col>
  </mdb-row>
</template>
<script>
  import { mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';

  export default {
    name: 'FormsPage',
    props:['url'],
    components: {
      mdbRow,
      mdbCol,
      mdbInput,
      mdbTextarea,
      mdbBtn,
      mdbCard,
      mdbCardBody,
      mdbCardHeader,
      mdbCardFooter,
      mdbCardTitle
    },
    data() {
      return {
        guests: 4
      };
    }
  };
</script>