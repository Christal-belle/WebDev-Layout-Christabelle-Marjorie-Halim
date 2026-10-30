@extends('layouts.app')

@section('content')
<section class="mt-6 px-4 md:px-8">
   <div class="max-w-7xl mx-auto">
      <div class="grid justify-center items-center gap-x-12 gap-y-16 lg:grid-cols-2">
         <div>
            <div class="max-w-3xl mx-auto text-center lg:mx-0 lg:text-left">
               <p class="mb-2 font-medium text-rose-700 text-sm uppercase"><span class="rotate-90 inline-block mr-2">|</span> SELAMAT DATANG DI PORTOFOLIO SAYA</p>
               <h1 class="text-4xl text-neutral-900 font-semibold !leading-tight mb-6 md:text-5xl">
                  Halo, Saya Christabelle Marjorie Halim</h1>
               <p class="text-neutral-600 text-lg leading-relaxed">Saya adalah seorang mahasiswa yang memiliki ketertarikan pada teknologi, desain, dan kreativitas. 
                  Melalui portofolio ini, saya membagikan berbagai proyek, pengalaman, dan karya yang telah saya kerjakan sebagai bagian dari perjalanan saya untuk 
                  terus belajar dan mengembangkan kemampuan.</p>

               <div class="mt-8 flex flex-wrap justify-center gap-4 lg:justify-start">
                  <a href="/blog" class="py-2.5 px-4 rounded-xl text-white border border-rose-600 bg-rose-600 hover:bg-rose-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-rose-500 font-bold text-base">
                     Lihat Portofolio
                  </a>
                  <a href="/contact" class="py-2.5 px-4 text-neutral-900 rounded-xl bg-white border border-neutral-300 transition-colors hover:bg-neutral-50 focus:outline-none focus-visible:ring-2 focus-visible:ring-rose-500 font-bold text-base">
                     Contact
                  </a>
               </div>
            </div>

            <div class="mt-12">
               <div class="grid gap-x-4 gap-y-6 text-center sm:grid-cols-3 lg:text-left">
                  <div class="flex flex-col">
                     <h5 class="text-rose-700 font-semibold text-2xl mb-2">10+</h5>
                     <p class="text-base text-neutral-600 font-medium">Projects</p>
                  </div>
                  <div class="flex flex-col">
                     <h5 class="text-rose-700 font-semibold text-2xl mb-2">888</h5>
                     <p class="text-base text-neutral-600 font-medium">Crash out</p>
                  </div>
                  <div class="flex flex-col">
                  </div>
               </div>
            </div>
         </div>

         <div class="columns-2 space-y-4">
            <div class="break-inside-avoid">
               <img src="../../img/pudel.jpeg" alt="face-primer-category" class="w-full h-full object-cover object-top rounded-2xl max-h-[360px] bg-transparent" />
            </div>
            <div class="break-inside-avoid">
               <img src="../../img/kelinci1.jpeg" alt="product6" class="w-full h-full object-cover object-top rounded-2xl max-h-[360px] aspect-square" />
            </div>
            <div class="break-inside-avoid">
               <img src="../../img/pizzakeju.jpeg" alt="product2" class="w-full h-full object-cover object-top rounded-2xl max-h-[360px] aspect-square" />
            </div>
            <div class="break-inside-avoid">
               <img src="../../img/kelinci2.jpeg" alt="skin-glow-category" class="w-full h-full object-cover object-top rounded-2xl max-h-[360px]" />
            </div>
         </div>
      </div>
   </div>
</section>

<div class="h-6"> </div>
@endsection