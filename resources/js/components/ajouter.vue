<template>
  <mdb-row>
    <mdb-col class="pb-2">
      <mdb-card class="text-info grey lighten-4">
        <mdb-card-header class="pt-4 white">
          <mdb-card-title><strong>Ajouter étudiant</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col md="6">
              <mdb-input label="Nom"  icon="user" />
              <mdb-input far icon="user" label="Prénom" />
              <mdb-input   icon="envelope" label="adresse email " />
   
    <mdb-input far icon="map" label="Adresse" />
    <mdb-input icon="lock" label="Mot de passe" />
                
            </mdb-col>
            <mdb-col md="6">
                <mdb-input label="Date de naissance" type ="date" far icon="calendar"/>
               <mdb-input  icon="map" label="Lieu de naissance" />
               <mdb-input label="Matricule"  far icon="id-card" />
               <div>
                   <span class="text-grey">Annee d'etude</span>
                          <select class="custom-select custom-select-sm grey lighten-4">
      <option selected>1CP</option>
      <option value="2">2CP</option>
      <option value="3">1CS</option>
      <option value="3">2CS</option>
      <option value="3">3CS</option>
    </select>
    </div>
              <mdb-input icon="users" label="Groupe" />
              
               
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex white justify-content-center">
          <mdb-btn outline="info" icon="paper-plane">Ajouter</mdb-btn>
        </mdb-card-footer>
      </mdb-card>
    </mdb-col>
  </mdb-row>
</template>
<script>
  import { mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';

  export default {
    name: 'FormsPage',
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