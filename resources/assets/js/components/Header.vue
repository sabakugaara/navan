<template>
    <div class="header">
        <nav class="header-nav">
            <ul>
                <li><router-link to="/admin">控制台</router-link></li>
                <li><router-link to="/post">撰写</router-link></li>
                <li><router-link to="/manage">管理</router-link></li>
                <li><router-link to="/options">设置</router-link></li>
            </ul>
        </nav>
        <!--
        <div>
            <ul>
                <li><router-link to="/profile">admin</router-link></li>
                <li><router-link to="/logout">登出</router-link></li>
                <li><router-link to="/website">网站</router-link></li>
            </ul>
        </div>
        -->
    </div>
</template>

<style>
    .header {
        background-color: rgb(41, 45, 51);
        height: 36px;
        line-height: 36px;
    }

    .header-nav ul {
        list-style-type: none;
        list-style-position: inside;
        margin: 0px;
        display: block;
        height: 36px;

    }

    .header-nav ul li {
        display: inline-block;
        height: 36px;
        line-height: 36px;
        font-size: 14px;
    }

    .header-nav a {
        color: rgb(187, 187, 187);
        text-decoration: none;
        padding: 0px 20px;
    }
    .header-nav a:active {
        color: white;
        font-weight: bold;
    }
</style>
