<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
const url = '/dashboard';
</script>


<template>
    <Head title="اقساط/وام" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">وام / اقساط</h2>
        </template>

        <div class="container py-12 " id="app">
            <form class="row py-6">
                <div class="col-4">

                </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="customRange1" class="form-label">مبلغ درخواستی</label>
                    <input type="range" class="form-range" id="customRange1">
                    <div id="emailHelp" class="form-text">امکان خرید تا سقف 20 میلیون تومان از همه‌ی فروشگاه‌ها فقط با ضمانت سفته‌ی الکترونیکی</div>
                </div>
                <div class="mt-6 mb-3">
                    <label for="payback_duration" class="form-label">مدت بازپرداخت</label>
                    <select name="payback_duration" class="form-select form-select-sm" aria-label="Small select example">
                        <option selected>برای انتخاب ماه روی منو کلیلک کنید ...</option>
                        <option v-for="(number_of_months,name) in months" :value="number_of_months">{{ name }}</option>


                    </select>
                </div>
                <p class="mt-4 text-body-secondary">
                    قسط ماهیانه  X تومان
                </p>
                <p class=" mt-4 text-body-secondary">
                    مجموع بازپرداخت قسط  X تومان
                </p>
                <button type="submit" class="mt-4 btn btn-primary">درخواست وام</button>
            </div>
                <div class="col-4">

                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
