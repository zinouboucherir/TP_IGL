<template>
	<mdb-card>
		<mdb-view hover>
			<div class="row justify-content-center">
				<mdb-card-image src="https://static.thenounproject.com/png/35778-200.png" alt="Card image cap"></mdb-card-image>
			</div>
		</mdb-view>
		<mdb-card-body>
			<mdb-card-title class="text-center">Boucherir Mohamed Zineddine</mdb-card-title>
			<mdb-card-text><h6>Matricule:17/0010</h6></mdb-card-text>
			<mdb-card-text><h6>Promo:1CS</h6></mdb-card-text>
			<mdb-card-text><h6>Groupe:06</h6></mdb-card-text>
			<mdb-btn  block color="info">Voir profil</mdb-btn>
		</mdb-card-body>
	</mdb-card>
</template>
<script>
	import { mdbCard, mdbCardImage, mdbCardBody, mdbCardTitle, mdbCardText, mdbBtn, mdbView, mdbMask } from 'mdbvue';
	export default {
		name: 'CardPage',
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