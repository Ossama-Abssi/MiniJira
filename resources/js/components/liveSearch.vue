<template>
    <div>
        <input type="text"  class="form-control" placeholder="Enterz Text ..." v-model="keyword"/>
        <ul class="autocomplete-result" id="autocomplete-results">
            <li class="autocomplete-results">
            
            </li>
        
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return{
            keyword:''      
            
             }
    }
}

</script>

<style>

</style>