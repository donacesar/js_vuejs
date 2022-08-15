<template>
    <div class="w-25" v-if="person">
        <div class="mb-3">
            <input type="text" v-model="person.name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="person.age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="person.job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDesabled" @click.prevent="$store.dispatch('update', {id: person.id, name: person.name, age: person.age, job: person.job})" type="sunmit" class="btn btn-primary" value="Update">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    computed: {
        isDesabled() {
            return this.person.name && this.person.age && this.person.job
        },
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
