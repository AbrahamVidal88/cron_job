<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
var n = 10;
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        sopas tas logueado
                    </div>
                </div>
            </div>
        </div>

        <p v-if="n==10">
           sopas si es diez: {{ n }}
           sopas si jalo el cambio mongol
           sopas123
        </p>
        <p v-else>
            sopas no es diez: {{ n }}
        </p>
    </AuthenticatedLayout>
</template>
