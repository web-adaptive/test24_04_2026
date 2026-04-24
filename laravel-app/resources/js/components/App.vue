<template>
    <div>
        <h1>Feedback SPA</h1>
        <nav>
            <router-link to="/">Форма</router-link>
            |
            <router-link to="/list">Список отправленных</router-link>
        </nav>
        <hr>
        <router-view />
    </div>
</template>
