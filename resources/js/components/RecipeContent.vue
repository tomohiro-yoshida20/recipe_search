<template>
  <div>
    <div v-for="recipe in recipes" :key="recipe.id">
      <div class="card mt-3">
        <div class="card-body">
          <p>
          id:
          {{ recipe.id }}
          </p>
          <div class="font-weight-bold">
          name:  {{ recipe.name }}
          </div>
          <p>
          content:
          {{ recipe.recipe_content }}
          </p>
          <p>
          recipe_url:
          {{ recipe.url }}
          </p>
          <div class="img_back">
            <img :src="imageUrl" class="recipe_img">
          </div>
          <!-- <RecipeImage></RecipeImage> -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    moji: {
      type: String,
    },
    recipes: {
      type: Array,
    }
  },
  mounted() {
    console.log(this.moji)
    console.log(this.recipes)
  },
  data() {
    return {
      imageUrl: "images/tkg.png"
    }
  },
}
</script>

<style>

</style>