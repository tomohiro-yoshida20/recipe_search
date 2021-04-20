<template>
  <div>

    <div class="card">
      <div class="card-body">
        <div class="card-title">

          調味料を選択
        </div>
        <div class="card-text">

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
      imageUrl: "images/tkg.png",
      foods: []
    }
  },
}
</script>

<style>

</style>