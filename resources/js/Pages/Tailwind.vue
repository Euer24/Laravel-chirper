<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
  <AuthenticatedLayout>

    <Head title="Tailwind" />
    <h1 class="text-center text-xl">Tailwind</h1>
      <!-- de gap zorgt voor ruimte tussen de colomen op de Y as -->
     <!-- De grid-cols-12 zorgt ervoor dat  het aantal colomen in een rij 12 is-->
     <!-- als je geen col-span mee geeft is de div automatich col-span-1 -->

     <!-- grid -->
    <div class="grid grid-cols-12 gap-6 ">
        <div class="col-span-12 gap-6"></div>
        <div class="col-span-12 bg-blue-500 h-16">01</div>
        <div class="col-span-6 bg-blue-500">02</div>
        <div class="col-span-6 bg-blue-500">03</div>
        <div class="col-span-4 bg-blue-500">04</div>
        <div class="col-span-4 bg-blue-500">05</div>
        <div class="col-span-4 bg-blue-500">06</div>
        <div class="col-start-3 col-span-6 bg-blue-500">07</div>
        <!-- Ik heb hier een col-span-12  om een gap te maken ik weet niet of dit legit is -->
        <div class="col-span-12 gap-6"></div>
    </div>

    
    <!-- flex basis -->
    <div class="flex flex-col-reverse gap-3">
      <div class="bg-red-500 col-span-12 basis-1/4 h-16">0</div>
      <div class="bg-red-500 basis-1/4">2</div>
      <div class="bg-red-500 basis-2/4">3</div>
      <!-- <div class="bg-red-500 col-span-12 basis-1/4">04</div> -->
    </div>

    <!-- grid kolomen -->
    <div class="grid grid-cols-2 gap-6 mt-8 ">
      <div class="bg-red-500 pb-12">col 1

        <p> 
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, quidem! Quia, nesciunt officia sit necessitatibus aperiam aut! Rerum eos nesciunt assumenda voluptas possimus ratione quaerat commodi? Sed vero provident dignissimos. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, quidem! Quia, nesciunt officia sit necessitatibus aperiam aut! Rerum eos nesciunt assumenda voluptas possimus ratione quaerat commodi? Sed vero provident dignissimos.
        </p>

      </div>
      <div class="bg-blue-500">col 2

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi velit ipsum illum, autem expedita nihil! Voluptas nobis cum minus quaerat incidunt sunt? Eum, qui illo labore totam asperiores quae vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi velit ipsum illum, autem expedita nihil! Voluptas nobis cum minus quaerat incidunt sunt? Eum, qui illo labore totam asperiores quae vero.
        </p>

      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8 ">
      <div class=""></div>
      <div class="bg-blue-500">col 2

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi velit ipsum illum, autem expedita nihil! Voluptas nobis cum minus quaerat incidunt sunt? Eum, qui illo labore totam asperiores quae vero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi velit ipsum illum, autem expedita nihil! Voluptas nobis cum minus quaerat incidunt sunt? Eum, qui illo labore totam asperiores quae vero.
        </p>
        
      </div>
      <div class=""></div>

    </div>

  </AuthenticatedLayout>
</template>