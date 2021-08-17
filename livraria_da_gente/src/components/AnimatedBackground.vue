<template>
    <!-- Container -->
    <div class="relative min-h-screen max-h-screen max-w-screen flex items-center justify-center bg-gray-900 overflow-hidden">
        <div class="absolute inset-0 p-2 grid grid-cols-12 gap-2 transform -skew-y-12 z-10 scale-150 grid-background">
            <!-- First Row -->
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-3 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>

            <!-- Second Row -->
            <div class="col-span-5 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>

            <!-- Third Row -->
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>

            <!-- Fourth Row -->
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>

            <!-- Fifth Row -->
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-3 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-3 bg-gray-800 rounded animate-pulse"></div>

            <!-- Sixth Row -->
            <div class="col-span-3 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-5 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>

            <!-- Seventh Row -->
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-1 bg-gray-800 rounded animate-pulse"></div>

            <!-- Eight Row -->
            <div class="col-span-6 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-4 bg-gray-800 rounded animate-pulse"></div>
            <div class="col-span-2 bg-gray-800 rounded animate-pulse"></div>
        </div>

        <!-- Content -->
        <div class="relative z-20">
            <h2 class="text-4xl text-white font-semibold">Welcome to Livraria da Gente</h2>
        </div>
    </div>
</template>

<script>
export default {
    Name: 'AnimatedBackground',

    mounted(){
        function getRandomInt(min, max){
            Math.ceil(min);
            Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }


        // To get all the divs that will be manipulated
        const gridItems = document.querySelectorAll(".grid-background > div");
        // console.log(gridItems)
        // Creates a random duration and delay
        gridItems.forEach((item) => {
          const delay = this.getRandomInt(0, 5);
          const duration = this.getRandomInt(3, 6);
        
          // set both
          item.style.animationDelay = `${delay}s`;
          item.style.animationDuration = `${duration}s`;
        });

    }
}
</script>
