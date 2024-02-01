<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
<template>
    <h1>Tailwind</h1>
    <!-- de gap zorgt voor ruimte tussen de colomen op de Y as -->
     <!-- De grid-cols-12 zorgt ervoor dat je zelf je eigen max col breedte kan kiezen in bootrap is de max col-12 -->
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

</template>