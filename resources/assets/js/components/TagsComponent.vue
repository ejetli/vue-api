<template>
     <div class="container">
        <div class="row">
         <div class="col-md-12">
            <div class="holder">
                
                <form @submit.prevent="addTag">
                <input type="text" placeholder="Enter a tag you have.." v-model="tag">
               <!-- <p class="alert" v-if="errors.has('tag')">{{ errors.first('tag') }}</p>v-validate="'min:5'" name="tag"-->
                </form>


                <ul>
                    <transition-group name="alert-in">
                    <li v-for="(data, index) in tags" :key='index'>{{ data.tag }}
                        <i class="fa fa-minus-circle btn btn-danger" v-on:click="remove(index)"></i>
                    </li>
                    </transition-group>
                </ul>

                <p>These are the tags that u need</p>
            </div>
         </div>
        </div>
    </div>
</template>

<script>
   export default {
    data() {
        return {
            tag: '',
          tags: [
            {"tag": "Frontend Developer"},
            {"tag": "back Developer"},
            {"tag": "engineel "} ,                        
          ]
        }
    },

    methods: {
        addTag() {
            this.tags.push({tag: this.tag})
            this.tag = '';
        },
        remove(id) {
            this.tags.splice(id,1);
        }
    }
   }
</script>

<style scoped>

.holder {
    background-color: #fff;
}

ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

ul li {
    padding: 20px;
    font-size: 1.3em;
    background-color: #E0EDF4;
    border-left: 5px solid #3EB3F6;
    margin-bottom: 2px;
    color: #3E5252;
}

p {
    text-align: center;
    padding: 30px 0;
    color: gray;
}
.contatiner {
    box-shadow: 0px 0px 40px lightgray;
}

input {
    width: calc(100% - 40px);
    border: 0;
    padding: 20px;
    font-size: 1.3em;
    background-color: #323333;
    color: #687F7F;
}

.alert {
    background: #fdf2ce;
    font-weight: bold;
    display: inline-block;
    padding: 5px;
    margin-top: -20px;
}

.alert-in-enter-active {
    animation: bounce-in .5s reverse;
}
.alert-in-leave-active {
    animation: bounce-in .5s reverse;
}

@keyframes bounce-in {
    0% {
      transition: scale(0);  
    }
    50% {
        transform: scale(1.5);
    }
    100% {
        transform: scale(1);
    }
}

i{
    float: right;
    cursor: pointer;
}
</style>