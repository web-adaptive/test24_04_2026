<template>
    <div>
        <h2>Форма обратной связи</h2>
        <form @submit.prevent="submitForm">
            <div>
                <label for="name">Имя</label>
                <input id="name" v-model.trim="name" type="text" required>
            </div>

            <div>
                <label for="message">Обращение</label>
                <textarea id="message" v-model.trim="message" required></textarea>
            </div>

            <div>
                <label for="target">Куда сохранить (фабрика)</label>
                <select id="target" v-model="target">
                    <option value="database">database</option>
                    <option value="email">email</option>
                </select>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</template>

<script>
export default {
    name: 'FormPage',
    data() {
        return {
            name: '',
            message: '',
            target: 'database',
        };
    },
    methods: {
        async submitForm() {
            const payload = {
                name: this.name,
                message: this.message,
                target: this.target,
            };

            await this.$store.dispatch('submitFeedback', payload);

            this.name = '';
            this.message = '';
            this.target = 'database';
        },
    },
};
</script>
