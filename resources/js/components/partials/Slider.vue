<template>
  <div>ciao</div>
  <!-- <div
    id="carouselExampleControls"
    class="carousel slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-inner">
      <div
        class="carousel-item"
        :class="{ active: i === 0 }"
        v-for="(movie, i) in dataList"
        :key="movie.id"
      >
        <img :src="movie.coverImg" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleControls"
      data-bs-slide="next"
      @click="$emit('next')"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->
</template>

<script>
export default {
  name: "Slider",
  props: {
    dataList: Array,
  },
};
</script>

<style scoped>
.carousel-item {
  height: 300px;
}
.carousel-item img {
  height: 100%;
  width: 100%;
  object-position: center;
  object-fit: cover;
}
</style>