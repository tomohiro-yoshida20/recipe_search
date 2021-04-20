// require('./bootstrap');
import './bootstrap'
import Vue from 'vue'
import TestContent from './components/TestContent'
import RecipeContent from './components/RecipeContent'
import RecipeImage from './components/RecipeImage'
import SelectFood from './components/SelectFood'

const app = new Vue({
  el: '#app',
  components: {
    TestContent,
    RecipeContent,
    RecipeImage,
    SelectFood
  },
})