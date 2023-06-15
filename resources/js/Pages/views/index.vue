<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p class="bg-red-300">Hello {{ user }}, welcome to your first Inertia app!</p>
</template>
