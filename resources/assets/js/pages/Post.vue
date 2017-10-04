<template>
    <div>
        <h2>撰写新文章</h2>
        <form id="new-post" action="/api/article" method="POST">
            <input type="input" id="title" placeholder="标题" name="title"/>

            <textarea name="content" id="text" cols="30" rows="10"></textarea>
            <input type="submit" value="保存"/>
        </form>
    </div>
</template>

