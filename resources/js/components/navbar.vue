<template>
  <mdb-navbar expand="large" color="info-color-dark" dark>
    <mdb-navbar-brand href="#">
      <img src="../../../public/assets/ESI_Logo2.png" height="45" alt="">
      ESI-ecole nationale supérieur d'informatique
    </mdb-navbar-brand>
    <mdb-navbar-toggler>
      <mdb-navbar-nav right>
        <mdb-nav-item href="#" active icon="home" text-white>Accueil</mdb-nav-item>
        <mdb-nav-item href="#"></mdb-nav-item>
        <mdb-dropdown tag="li" class="nav-item">
          <mdb-dropdown-toggle tag="a" navLink color="info-color-dark" dark slot="toggle" waves-fixed icon="cog">Paramétres</mdb-dropdown-toggle>
          <mdb-dropdown-menu>
            <mdb-dropdown-item>Changer mot de passe</mdb-dropdown-item>
            <mdb-dropdown-item>Changer nom d'utilisateur</mdb-dropdown-item>
        
          </mdb-dropdown-menu>
        </mdb-dropdown>
        <mdb-nav-item onclick="document.getElementById('logout-form').submit();" icon="arrow-left">Déconnecter</mdb-nav-item>
           <form id="logout-form" v-bind:action="url" method="POST" style="display: none;">
                          
                                    </form>
      </mdb-navbar-nav>
    </mdb-navbar-toggler>
  </mdb-navbar>
</template>
<script>
  import { mdbDropdown, mdbDropdownToggle, mdbDropdownMenu, mdbDropdownItem, mdbContainer, mdbNavbar, mdbNavbarBrand, mdbNavbarToggler, mdbNavbarNav, mdbNavItem } from 'mdbvue';
  export default {
    name: 'HelloWorld',
    props:['url'],
    components: {
      mdbNavbar,
      mdbNavbarBrand,
      mdbNavbarToggler,
      mdbNavbarNav,
      mdbNavItem,
      mdbContainer,
      mdbDropdown,
      mdbDropdownToggle,
      mdbDropdownMenu,
      mdbDropdownItem
    }
  }
</script>