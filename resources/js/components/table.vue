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
        <tr v-for="note in notes" :key="note">
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
    props:['url'],
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody
    },data () {
      return {
        _url : this.url, 
        notes :''
      }
    }
    
    ,mounted ()
    {
      axios.get(this._url)
      .then(response => (this.notes=response.notes)); 
    }
  }
</script>