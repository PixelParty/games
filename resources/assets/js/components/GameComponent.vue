<template>
<div class="table-responsive">
    <table class="table" id="main-game-table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th nowrap >Balance</th>
                <th nowrap >Players Daily</th>
                <th nowrap >Volume 24h</th>
                <th nowrap >Volume 7d</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="game in games">
                <td><img :src="game.small_image"/></td>
                <td>
                    <span class="game-name">{{ game.name }}</span>
                    <span class="game-discription">{{ game.discription }}</span>
                </td>
                <td nowrap valign="middle" align="right"><span></span></td>
                <td nowrap valign="middle" align="right"><span></span></td>
                <td nowrap valign="middle" align="right"><span></span></td>
                <td nowrap valign="middle" align="right"><span></span></td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data: function () {
            return {
                games: []
            }
        },
        mounted() {
            var app = this;
            app.games = [{
                name: 'CriptoCats',
                discription: 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
                small_image:"/images/cryptokitties.png"
            },{ 
                name: 'Bloody Kitties',
                discription: 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
                small_image:"/images/cryptokitties.png"
            },{ 
                name: 'Crypto Bots',
                discription: 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...',
                small_image:"/images/cryptokitties.png"
            }]
        }
    }   
</script>
