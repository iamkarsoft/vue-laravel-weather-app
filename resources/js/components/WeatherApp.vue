<template>
<div class="text-white mb-8">
  <div class="places-input text-gray-800">
    <input type="text" class="w-full " name="" id="">
  </div>
  <div class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4">
    <div class="current-weather flex items-center justify-between px-6 py-8">
      <div class="flex items-center">
        <div>
          <div class="text-6xl font-semibold ">8 C</div>
          <div>Feels like 2 c</div>
        </div>
        <div class="mx-5">
          <div class="font-semibold">Cloudy</div>
          <div class="">Accra, Ghana</div>
        </div>
      </div>
      <div>icon</div>
    </div>
    <!-- /current weather -->
    <div class="feature-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
      <div class="flex items-center mt-8">
        <div class="w-1/6 text-gray-200">Mon</div>
        <div class="w-4/6 flex px-4">
          <div>icon</div>
          <div class="ml-3">Cloudy Cloudy</div>
        </div>
        <div class="w-1/6 text-right">
          <div>5 c</div>
          <div>4 c</div>
        </div>
      </div>

      <div class="flex items-center mt-8">
        <div class="w-1/6 text-gray-200">Mon</div>
        <div class="w-4/6 flex px-4">
          <div>icon</div>
          <div class="ml-3">Cloudy Cloudy</div>
        </div>
        <div class="w-1/6 text-right">
          <div>5 c</div>
          <div>4 c</div>
        </div>
      </div>

      <div class="flex items-center mt-8">
        <div class="w-1/6 text-gray-200">Mon</div>
        <div class="w-4/6 flex px-4">
          <div>icon</div>
          <div class="ml-3">Cloudy Cloudy</div>
        </div>
        <div class="w-1/6 text-right">
          <div>5 c</div>
          <div>4 c</div>
        </div>
      </div>

    </div>
  </div> <!-- weather container -->
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
