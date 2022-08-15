<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDesabled" @click.prevent="$store.dispatch('store', { name, age, job })" type="submit" class="btn btn-primary" value="Add">
        </div>
    </div>
</template>

<script>

export default {
    name: "Create",
    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },
    computed: {
        isDesabled() {
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
