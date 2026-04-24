<template>
    <div>
        <h2>Отправленные формы (из Vuex)</h2>
        <p v-if="!forms.length">Пока ничего не отправляли.</p>

        <ul v-else>
            <li v-for="(form, index) in forms" :key="index">
                <strong>{{ form.name }}</strong>:
                {{ form.message }}
                ({{ form.target }})
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'ListPage',
    computed: {
        forms() {
            return this.$store.state.forms;
        },
    },
};
</script>
