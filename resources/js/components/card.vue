<template>
	<mdb-card>
		<mdb-view hover>
			<div class="row justify-content-center">
				<mdb-card-image src="https://static.thenounproject.com/png/35778-200.png" alt="Card image cap"></mdb-card-image>
			</div>
		</mdb-view>
		<mdb-card-body> 
			<div v-if="this.admin">
				<mdb-card-title class="text-center">{{this.admin}}</mdb-card-title>
			</div>
			<div v-else>
			<mdb-card-title class="text-center">{{this.etudiant.nom+" "+this.etudiant.prenom}}</mdb-card-title>
			<mdb-card-text><h6>Matricule:{{this.etudiant.matricule}}</h6></mdb-card-text>
			<mdb-card-text><h6>Promo:{{this.etudiant.promo}}</h6></mdb-card-text>
			<mdb-card-text><h6>Groupe:{{this.etudiant.groupe}}</h6></mdb-card-text>
			</div>
			<mdb-btn  block color="info">Voir profil</mdb-btn>
		</mdb-card-body>
	</mdb-card>
</template>
<script>
	import { mdbCard, mdbCardImage, mdbCardBody, mdbCardTitle, mdbCardText, mdbBtn, mdbView, mdbMask } from 'mdbvue';
	export default {
		name: 'CardPage',
		props:['etudiant','admin'],
		components: {
			mdbCard,
			mdbCardImage,
			mdbCardBody,
			mdbCardTitle,
			mdbCardText,
			mdbBtn,
			mdbView,
			mdbMask
		}
	}
</script>