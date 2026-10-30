@extends('layouts.app')

@section('content')
<section class="mt-6 px-4 md:px-8">
   <div class="max-w-4xl mx-auto lg:max-w-7xl">
      <div class="mb-12 max-w-3xl mx-auto text-center md:mb-16">
         <h2 class="text-3xl font-bold mb-6 text-neutral-900 text-rose-600 mb-6 md:text-4xl">Latest Posts</h2>
         <p class="text-base text-neutral-600 leading-relaxed">Every creation is part of my journey to learn, grow, and turn ideas into something meaningful</p>
      </div>

      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 max-w-md mx-auto md:max-w-full">
         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/kelinci3.jpeg" alt="Imagination" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">10 FEB 2023 | BY JOHN DOE</span>
               <h3 class="text-xl font-bold text-white">A Guide to Igniting Your Imagination</h3>
            </div>
         </a>

         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/kelinci4.jpeg" alt="Trends and Predictions" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
               <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
            </div>
         </a>

         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/kelinci5.jpeg" alt="Hacks to Supercharge Your Day" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">7 JUN 2023 | BY MARK ADAIR</span>
               <h3 class="text-xl font-bold text-white">Hacks to Supercharge Your Day</h3>
            </div>
         </a>

         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/kelinci6.jpeg" alt="Healthy Food" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
               <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
            </div>
         </a>

         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/kelinci7.jpeg" alt="Healthy Food" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
               <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
            </div>
         </a>

         <a href="http://medium.com/@christal-belle/my-first-experience-using-figma-challanges-and-tips-12c37207a51a" class="bg-neutral-50 rounded-2xl overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-30 border-rose-200 border-4">
            <img src="../../img/pudel.jpeg" alt="Healthy Food" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
            <div class="bg-gradient-to-t from-black/60 via-black/60 to-transparent p-6 absolute bottom-0 left-0 right-0 z-20">
               <span class="text-sm block mb-2 text-neutral-300 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
               <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
            </div>
         </a>
      </div>
   </div>
</section>

<div class="h-6"> </div>
@endsection
