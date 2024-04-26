<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const url = '/loan';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">داشبورد</h2>
        </template>

        <div class="py-12" id="app">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">شما با موفقیت عضو شدید!</div>
                    <div class="p-6 text-gray-900"><a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" v-bind:href="url">کلیک جهت وام / قسط</a></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
