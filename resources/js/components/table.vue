<template>
  <div>
    <mdb-tbl sm>
      <mdb-tbl-head>
        <tr>
          <th>Module</th>
          <th>Note CC</th>
          <th>Note TP</th>
          <th>Note CI</th>
          <th>Note CF</th>
          <th>Moyenne</th>
        </tr>
      </mdb-tbl-head>
      <mdb-tbl-body>
        <tr v-for="note in this.notes" :key="note.id">
          <th>{{note.module}}</th>
          <td>{{note.cc}}</td>
          <td>{{note.tp}}</td>
          <td>{{note.ci}}</td>
          <td>{{note.cf}}</td>
          <td>{{note.moyenne}}</td>
        </tr>

    
      </mdb-tbl-body>
    </mdb-tbl>
  </div>
</template>
<script>
import axios from "axios"; 
  import { mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
  export default {
    name: 'TablePage',
    props:['notes'],
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody
    },data () {
      return {
        
      }
    }
    
  
  }
</script>